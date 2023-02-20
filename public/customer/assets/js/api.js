const Api = {
    Category: {},  
    Product: {},  

    Image: {},
    
};
(() => {
    $.ajaxSetup({
        headers: { 
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true
    });
})();
 


//Category
(() => {
    Api.Category.GetAll = () => $.ajax({
        url: `/customer/apip/category/get`,
        method: 'GET',
    }); 
})();

//Product
(() => {
    Api.Product.GetBestDiscount = () => $.ajax({
        url: `/customer/apip/product/get-best-discount`,
        method: 'GET',
    }); 
    Api.Product.getNewItem = () => $.ajax({
        url: `/customer/apip/product/get-new-item`,
        method: 'GET',
    }); 
    Api.Product.GetOne = (id) => $.ajax({
        url: `/customer/apip/product/get-one/${id}`,
        method: 'GET',
    }); 
    Api.Product.GetProduct = () => $.ajax({
        url: `/customer/apip/product/get-category`,
        method: 'GET',
    }); 

})();

