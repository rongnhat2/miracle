const Api = {
    Category: {},  
    Product: {},  
    Branch: {},  
    Warehouse: {},  
    Discount: {},
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
 


//Category
(() => {
    Api.Category.GetAll = () => $.ajax({
        url: `/apip/category/get`,
        method: 'GET',
    }); 
    Api.Category.Store = (data) => $.ajax({
        url: `/apip/category/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Category.getOne = (id) => $.ajax({
        url: `/apip/category/get-one/${id}`,
        method: 'GET',
    });
    Api.Category.Update = (data) => $.ajax({
        url: `/apip/category/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Category.Delete = (id) => $.ajax({
        url: `/apip/category/delete/${id}`,
        method: 'GET',
    });
    Api.Category.Trending = (id) => $.ajax({
        url: `/apip/category/update-trending`,
        method: 'PUT',
        dataType: 'json',
        data: {
            id: id ?? '',
        }
    });
})();

//Product
(() => {
    Api.Product.GetAll = () => $.ajax({
        url: `/apip/product/get`,
        method: 'GET',
    }); 
    Api.Product.Store = (data) => $.ajax({
        url: `/apip/product/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Product.getOne = (id) => $.ajax({
        url: `/apip/product/get-one/${id}`,
        method: 'GET',
    });
    Api.Product.Update = (data) => $.ajax({
        url: `/apip/product/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Product.Delete = (id) => $.ajax({
        url: `/apip/product/delete/${id}`,
        method: 'GET',
    });
    Api.Product.Trending = (id) => $.ajax({
        url: `/apip/product/update-trending`,
        method: 'PUT',
        dataType: 'json',
        data: {
            id: id ?? '',
        }
    });
})();


//Discount
(() => {
    Api.Discount.GetAll = () => $.ajax({
        url: `/apip/discount/get`,
        method: 'GET',
    });
    Api.Discount.GetDiscount = () => $.ajax({
        url: `/apip/discount/get-discount`,
        method: 'GET',
    });
    Api.Discount.Store = (data) => $.ajax({
        url: `/apip/discount/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });  
    Api.Discount.Delete = (id) => $.ajax({
        url: `/apip/discount/delete/${id}`,
        method: 'GET',
    }); 
})();

//Branch
(() => {
    Api.Branch.GetAll = () => $.ajax({
        url: `/apip/branch/get`,
        method: 'GET',
    }); 
    Api.Branch.Store = (data) => $.ajax({
        url: `/apip/branch/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Branch.getOne = (id) => $.ajax({
        url: `/apip/branch/get-one/${id}`,
        method: 'GET',
    });
    Api.Branch.Update = (data) => $.ajax({
        url: `/apip/branch/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Branch.Delete = (id) => $.ajax({
        url: `/apip/branch/delete/${id}`,
        method: 'GET',
    });
})();

//Warehouse
(() => {
    Api.Warehouse.GetDataItem = () => $.ajax({
        url: `/apip/warehouse/get-item`,
        method: 'GET',
    });
    Api.Warehouse.GetDataHistory = () => $.ajax({
        url: `/apip/warehouse/get-history`,
        method: 'GET',
    }); 
    Api.Warehouse.Store = (data) => $.ajax({
        url: `/apip/warehouse/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Warehouse.getOne = (id) => $.ajax({
        url: `/apip/warehouse/get-ware-one/${id}`,
        method: 'GET',
    });
})();


//Order
(() => {
    Api.Order.GetAll = (id) => $.ajax({
        url: `/apip/order/get`,
        method: 'GET',
        dataType: 'json',
        data: {
            id: id ?? '',
        }
    });
    Api.Order.GetOne = (id) => $.ajax({
        url: `/apip/order/get-one`,
        method: 'GET',
        dataType: 'json',
        data: {
            id: id ?? '',
        }
    });
    Api.Order.Update = (data) => $.ajax({
        url: `/apip/order/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})();

// Image
(() => {
    Api.Image.Create = (data) => $.ajax({
        url: `/apip/post-image`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    
})();
