const View = {
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                data.name,  
                data.prices,  
                `<img src="/${data.image}" style="width:200px" alt="">`,   
                `<label class="switch" data-id="${data.id}" atr="Status"> <span class="slider round ${data.trending == '1' ? 'active' : ''}"></span> </label>`,
                `<div class="view-data tab-action" atr="View" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [
                    { title: 'ID', name: 'id', orderable: true, width: '10%', },
                    { title: 'Tên', name: 'name', orderable: true, width: '10%', },
                    { title: 'Đơn giá', name: 'name', orderable: true, width: '10%', },
                    { title: 'Hình ảnh', name: 'image', orderable: true, },   
                    { title: 'Trạng thái', name: 'image', orderable: true, },   
                    { title: 'Hành động', name: 'Action', orderable: true, width: '10%', },
                ];
            IndexView.table.init("#data-table", row_table);
        }
    }, 
    Data: {
        Category: [],
    },
    Layout: {
        FormCreate: "",
        FormUpdate: "",
        FormDelete: "",
        init(){
            View.Layout.FormCreate = $(".layout-tab-create").html();
            View.Layout.FormUpdate = $(".layout-tab-create").html();
            View.Layout.FormDelete = $(".layout-tab-delete").html();
            $(".layout-tab-create").remove();
            $(".layout-tab-delete").remove();
        }
    },
    FullTab: {  
        Create: { 
            setVal(resource){
                View.Data.Category.map((v, k) => {
                    $(`${resource}`)
                        .find('.data-category')
                        .append(`<div class="radio">
                                    <input id="radio${k}" name="category" value="${v.id}" type="radio" ${ k == 0 ? "checked" : "" }>
                                    <label for="radio${k}">${v.name}</label>
                                </div>`);
                })
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, "");
                var data_category       = $(`${resource}`).find('[name=category]:checked').val();
                var data_prices         = $(`${resource}`).find('.data-prices').val().replace(noTag, "");
                var data_description    = $(`${resource}`).find('.data-description').val().replace(noTag, "");
                var data_detail         = $(`${resource}`).find('.data-detail').val();

                // --Required Value
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }
                if (data_prices == '') { required_data.push('Nhập đơn giá.'); onPushData = false }
                if (data_description == '') { required_data.push('Nhập mô tả ngắn.'); onPushData = false }
                if (data_detail == '') { required_data.push('Mô tả đầy đủ.'); onPushData = false }
                if (data_image.length <= 0) { required_data.push('Hãy chọn ảnh.'); onPushData = false } 

                if (onPushData) {
                    fd.append('data_image', data_image[0] ?? "null");  
                    fd.append('data_name', data_name); 
                    fd.append('data_prices', data_prices); 
                    fd.append('data_description', data_description); 
                    fd.append('data_detail', data_detail); 
                    fd.append('data_category', data_category); 

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate)
                IndexView.summerNote.init(".summernote", "", 300)
            }
        },
        Update: { 
            setVal(resource, data){
                View.Data.Category.map((v, k) => {
                    $(`${resource}`)
                        .find('.data-category')
                        .append(`<div class="radio">
                                    <input id="radio${k}" name="category" value="${v.id}" type="radio" ${ k == 0 ? "checked" : "" }>
                                    <label for="radio${k}">${v.name}</label>
                                </div>`);
                })
                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find(`[name=category][value=${data.category_id}]`).prop('checked', true);
                $(`${resource}`).find('.image-preview').css({ 'background-image': `url('/${data.image ?? 'icon/noimage.png'}')` });
                $(`${resource}`).find('.data-name').val(data.name);
                $(`${resource}`).find('.data-prices').val(data.prices);
                $(`${resource}`).find('.data-description').val(data.description);
                IndexView.summerNote.update(`${resource} .data-detail`, data.detail); 
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val().replace(noTag, "");
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, "");
                var data_category       = $(`${resource}`).find('[name=category]:checked').val();
                var data_prices         = $(`${resource}`).find('.data-prices').val().replace(noTag, "");
                var data_description    = $(`${resource}`).find('.data-description').val().replace(noTag, "");
                var data_detail         = $(`${resource}`).find('.data-detail').val();

                // --Required Value
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }
                if (data_prices == '') { required_data.push('Nhập đơn giá.'); onPushData = false }
                if (data_description == '') { required_data.push('Nhập mô tả ngắn.'); onPushData = false }
                if (data_detail == '') { required_data.push('Mô tả đầy đủ.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_id', data_id); 
                    fd.append('data_image', data_image[0] ?? "null");  
                    fd.append('data_name', data_name); 
                    fd.append('data_prices', data_prices); 
                    fd.append('data_description', data_description); 
                    fd.append('data_detail', data_detail); 
                    fd.append('data_category', data_category);  

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate)
                IndexView.summerNote.init(".summernote", "", 300)
            }
        },
        Delete: {
            setVal(resource, id){
                $(resource).find('.data-id').val(id)
            },
            getVal(resource){ 
                $(resource).find('.data-id').val()
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormDelete)
            }
        },
        onPush(name, resource, callback){ 
            $(document).on('click', `${resource} .full-tab-action`, function() {
                $(this).attr('atr').trim()
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            }); 
        },
        default(name){
            $(`[data-tab-name=${name}]`).html("");
        },
        doShow(name){
            $(".data-custom-tab").removeClass("on-show");
            $(`.data-custom-tab[data-tab-name=${name}]`).addClass("on-show"); 
        }, 
        onShow(name, callback){
            $(document).on('click', `.tab-action`, function() {
                if($(this).attr('atr').trim() == name) {
                    var id = $(this).attr("data-id");
                    callback(id);
                }
            });
        },
    },
    init(){
        View.Layout.init();
        View.table.init(); 
    }
};
(() => {
    View.init();
    function init(){
        getData();
        getCategory();
    }
    // Table
    View.FullTab.onShow("Table", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        getData();
    })
    
    // Create
    View.FullTab.onShow("Create", () => {
        View.FullTab.doShow("Create");
        View.FullTab.Create.init("Create");  
        View.FullTab.Create.setVal("#popup-create") 
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => { 
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Product.Store(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })

    // Update
    View.FullTab.onShow("View", (id) => {
        View.FullTab.doShow("Update");
        View.FullTab.Update.init("Update");
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Product.getOne(id)
            .done(res => { 
                console.log(res);
                View.FullTab.Update.setVal("#popup-update", res.data)
                IndexView.helper.showToastSuccess('Success', 'Lấy ra dữ liệu'); 
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })
    View.FullTab.onPush("Confirm", "#popup-update", () => { 
        var fd = View.FullTab.Update.getVal("#popup-update");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Product.Update(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })

    // Delete
    View.FullTab.onShow("Delete", (id) => {
        View.FullTab.doShow("Delete");
        View.FullTab.Delete.init("Delete"); 
        View.FullTab.Delete.setVal("#popup-delete", id)
    })
    View.FullTab.onPush("Delete", "#popup-delete", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default();
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Product.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });

    })

    IndexView.table.onSwitch(debounce((item) => {
        Api.Product.Trending(item.attr('data-id'))
            .done(res => {
                getData()
                item.find('.slider').toggleClass('active');
            })
            .fail(err => {
                console.log(err);
            })
            .always(() => {
            });
    }, 500));

    function getData(){
        Api.Product.GetAll()
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.table.__generateDTRow(v));
                    IndexView.table.render();
                })
                IndexView.table.render();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    function getCategory(){
        Api.Category.GetAll()
            .done(res => {
                View.Data.Category = res.data;
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    
    function debounce(f, timeout) {
        let isLock = false;
        let timeoutID = null;
        return function(item) {
            if(!isLock) {
                f(item);
                isLock = true;
            }
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                isLock = false;
            }, timeout);
        }
    }

    init();
})();
