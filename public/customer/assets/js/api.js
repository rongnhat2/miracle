const Api = {
    Auth: {},  
    Category: {},  
    Product: {},  
    Order: {},  

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
 
// Order
(() => {
    Api.Order.Checkout = (data) => $.ajax({
        url: `/customer/apip/order/checkout`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Order.GetOrder = (tab) => $.ajax({
        url: `/customer/apip/order/get`,
        method: 'GET',
        dataType: 'json',
        data: {
            tab: tab ?? null,
        }
    });
})();

//Auth
(() => {
    Api.Auth.onRegister = (data) => $.ajax({
        url: `/customer/apip/auth/register`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Auth.onLogin = (data) => $.ajax({
        url: `/customer/apip/auth/login`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Auth.onForgot = (data) => $.ajax({
        url: `/customer/apip/auth/forgot`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Auth.onReset = (data) => $.ajax({
        url: `/customer/apip/auth/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Auth.onUpdateProfile = (data) => $.ajax({
        url: `/customer/apip/auth/update-profile`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 


    Api.Auth.GetUserInfo = () => $.ajax({
        url: `/customer/apip/auth/get`,
        method: 'GET',
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

