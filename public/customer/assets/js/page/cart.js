const View = { 
	Cart: {
		render(v){
			$(".shop-table.table tbody")
				.append(`<tr class="shoping-cart-item" 
							prices="${v.data_product.prices}" 
							realPrices="${v.data_product.prices - v.data_product.prices*v.data_discount/100}" 
							discount="${v.data_discount}" 
							id="${v.data_product.id}"
						>
                            <td class="product-thumbnail">
                                <a href="/product/${v.data_product.id}-${v.data_product.slug}" target="_blank">
                                	<img src="${v.data_product.image}" alt="Adventure">
                            	</a>
                            </td>
                            <td class="product-info">
                                <h2><a href="single-shop.html">Margertta Pizza</a></h2> 
                                <ul class="list tools remove-item"> 
                                    <li><a href="#"><span class="icon-cross"></span> remove</a></li>
                                </ul>
                            </td>
                            <td class="product-price">
                                <span class="amount">${v.data_product.prices}$</span>
                            </td>
                            <td class="product-discount">
                                <span class="amount">${v.data_discount}%</span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <div class="input-spinner product-no"> 
                                        <input type="text" value="1" style="width: 40px;"> 
                                    </div> 
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="amount-total">${v.data_product.prices - v.data_product.prices*v.data_discount/100}$</span>
                            </td>
                        </tr>`)
		},
        onRemove(callback){
            $(document).on('click', `.remove-item`, function(event) {
                var father = $(this).parent().parent();
                var id = father.attr("id");
                father.remove();
                callback(id)
            });
        },
		getCheckout(){
			var data = {
				total_price: 0,
			};
			var item = [];
			var quantity_item = [];
			$(".shop-table.table tbody tr").each(function(index, el) {
				let quantity = $(this).find("input").val();
				let price = $(this).attr("realPrices");
				data["total_price"] += quantity * price;
				item.push($(this).attr("id"))
				quantity_item.push($(this).find("input").val())
				$(this).find(".product-subtotal span").html(`${ quantity * price}$`)
			});
			$(".cart-subtotal strong").html(data.total_price + "$")
			$(".vat strong").html(Math.round((data.total_price / 10) * 100) / 100 + "$")
			$(".cart-total-amount .amount").html(Math.round((data.total_price) * 100) / 100 + "$");
			localStorage.setItem("miracle-checkout", data.total_price); 
			localStorage.setItem("miracle-item", item.toString()); 
			localStorage.setItem("miracle-quantity", quantity_item.toString()); 
		},
		getVal(){
            var resource = $(".shopping-cart-block");
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;

            var data_cart          = localStorage.getItem("miracle-item");
            var data_quantity      = localStorage.getItem("miracle-quantity");
            var data_price      	= localStorage.getItem("miracle-checkout");
            var data_name          = resource.find('.data-name').val();
            var data_address       = resource.find('.data-address').val();
            var data_phone         = resource.find('.data-phone').val();
            var data_email         = resource.find('.data-email').val();
            var data_payment       = resource.find("[name=payment-method]:checked").val();
 
            if (data_name == '') { required_data.push('Name required.'); onPushData = false }
            if (data_address == '') { required_data.push('Address required'); onPushData = false }
            if (data_phone == '') { required_data.push('Telephone required'); onPushData = false }
            if (data_email == '') { required_data.push('Email required'); onPushData = false }
            if (data_cart == null || data_cart == "") {  onPushData = false }
            if (data_quantity == null || data_quantity == "") {  onPushData = false }

            if (onPushData) {
                fd.append('data_cart', data_cart);
                fd.append('data_quantity', data_quantity);
                fd.append('data_price', data_price);
                fd.append('data_name', data_name);
                fd.append('data_address', data_address);
                fd.append('data_phone', data_phone);
                fd.append('data_email', data_email);
                fd.append('data_payment', data_payment);
                return fd;
            }else{
                resource.find('.error-log .js-response').remove();
                var required_noti = ``;
                for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                resource.find('.error-log').prepend(`<div class="js-response js-errors">${required_noti}</div> `)
                return false;
            }
		},
        setUpdate(callback){
            $(document).on('click', `.cart-update`, function() {
                callback();
            });
        },
        checkout(callback){
            $(document).on('click', `.action-checkout`, function() {
                callback();
            });
        },
        response: { 
            success(message){
                $(".error-log .js-response").remove();
                $(".error-log").prepend(`<div class="js-response js-success"><li>${message}</li></div>`)
                setTimeout(function () {
                    $('.error-log .js-response').remove();
                }, 5000);
            },
            error(message){
                $(".error-log .js-response").remove();
                $(".error-log").prepend(`<div class="js-response js-errors"><li>${message}</li></div>`)
                setTimeout(function () {
                    $('.error-log .js-response').remove();
                }, 5000);
            },                  
        },
	},
    init(){

    }
};
(() => {
    View.init();
    function init(){ 
    	getCart()
    }
    function getCart(){
    	var card = localStorage.getItem("miracle-card").split(",");
    	for (var i = 0; i < card.length; i++) {
    		getProduct(card[i])
    	}
    }
    async function redirect_logined(url) {
        await delay(1500);
        window.location.replace(url);
    }
    function delay(delayInms) {
        return new Promise(resolve => {
            setTimeout(() => {
                resolve(2);
            }, delayInms);
        });
    }
    View.Cart.checkout(() => {
    	if ($('.auth-value').val() == 0) {
    		window.location.replace('/login');
    	}else{
    		Api.Order.Checkout(View.Cart.getVal())
	            .done(res => { 
	                if (res.status == 200) {
	                    View.Cart.response.success(res.message)
	                    localStorage.removeItem("miracle-card");
	                    localStorage.removeItem("miracle-item");
	                    localStorage.removeItem("miracle-quantity");
	                    localStorage.removeItem("miracle-checkout"); 
	                    redirect_logined(res.data)
	                }else{
	                    View.Cart.response.error(res.message)
	                }
	            })
	            .fail(err => {   })
	            .always(() => { });  
    	}
    })
    View.Cart.onRemove((id) => {
        var cart_item = localStorage.getItem("miracle-card").split(",").filter(item => item !== id).join(",");
        localStorage.setItem("miracle-card", cart_item)
        View.Cart.getCheckout();
        updateCartUser();
    })
    View.Cart.setUpdate(() => {
    	View.Cart.getCheckout()
    })
    function getProduct(id){
        Api.Product.GetOne(id)
            .done(res => {
            	View.Cart.render(res.data);
    			View.Cart.getCheckout()
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
 
    init();
})();
