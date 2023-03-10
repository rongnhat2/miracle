const View = {
    Product: {
        render(data){
            $(".product-name").html(data.data_product.name);
            $(".product-description").html(data.data_product.description);
            $(".product-detail").html(data.data_product.detail);
            $(".product-prices").html(data.data_discount == 0 
                    ? `${data.data_product.prices}$` 
                    : `<del>${data.data_product.prices}<sup>$</sup></del> ${data.data_product.prices - (data.data_product.prices * data.data_discount / 100)}<sup>$</sup>`)
            $(".thumbnails-wrapper-area img").attr("src", `/${data.data_product.image}`);
            $(".share-and-whishlist a").attr("data-id", data.data_product.id);

            var cards = localStorage.getItem("miracle-card") == null ? "" : localStorage.getItem("miracle-card").split(",");
            if (cards.includes(data.data_product.id+"")) {
                $(".action-add-to-card").html(`<i class="fas fa-check"></i>`)
                $(".action-add-to-card").removeClass("action-add-to-card")
            }else{
                $(".action-add-to-card").html(`<span class="fas fa-shopping-cart"></span>`)
            }

        }
    },
    init(){

    }
};
(() => {
    View.init();
    function init(){
        getProduct(); 
    }

    function getProduct(){
        var pathname = window.location.pathname
        var product = pathname.split('/')[2].split('-')[0] 
        Api.Product.GetOne(product)
            .done(res => {
                View.Product.render(res.data);
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
 

    init();
})();
