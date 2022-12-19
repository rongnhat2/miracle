const Api = {
    Category: {},  
    Product: {},  
    Branch: {},  
    Warehouse: {},  

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
    Api.Warehouse.GetAll = () => $.ajax({
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
        url: `/apip/warehouse/get-one/${id}`,
        method: 'GET',
    });
    Api.Warehouse.Update = (data) => $.ajax({
        url: `/apip/warehouse/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Warehouse.Delete = (id) => $.ajax({
        url: `/apip/warehouse/delete/${id}`,
        method: 'GET',
    });
})();


//Layout
(() => {
    Api.Layout.GetAll = () => $.ajax({
        url: `/apip/layout/get`,
        method: 'GET',
    }); 
    Api.Layout.Update = (data) => $.ajax({
        url: `/apip/layout/update`,
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
