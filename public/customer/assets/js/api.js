const Api = {
    Category: {},  

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

