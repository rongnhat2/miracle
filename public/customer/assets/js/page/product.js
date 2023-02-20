const View = {
    Product: {
        render(data){
            $(".product-name").html(data.data_product.name);
            $(".product-description").html(data.data_product.description);
            $(".product-detail").html(data.data_product.detail);
            $(".product-prices").html(data.data_discount == 0 
                    ? `${data.data_product.prices}$` 
                    : `<del>${data.data_product.prices}<sup>$</sup></del> ${data.data_product.prices - (data.data_product.prices * data.data_discount / 100)}<sup>$</sup>`)

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
