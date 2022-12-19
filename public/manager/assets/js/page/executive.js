const View = {
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                data.name,  
                data.position,  
                `<img src="/${data.image}" style="width:100px" alt="">`,   
                `<div class="view-data tab-action" atr="View" style="cursor: pointer" data-id="${data.executive_id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.executive_id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [
                    {
                        title: 'ID',
                        name: 'id',
                        orderable: true,
                        width: '10%',
                    },
                    {
                        title: 'Tên',
                        name: 'name',
                        orderable: true,
                        width: '20%',
                    },
                    {
                        title: 'Vị trí',
                        name: 'image',
                        orderable: true,
                        width: '20%',
                    }, 
                    {
                        title: 'Hình ảnh',
                        name: 'image',
                        orderable: true,
                    },   
                    {
                        title: 'Hành động',
                        name: 'Action',
                        orderable: true,
                        width: '10%',
                    },
                ];
            IndexView.table.init("#data-table", row_table);
        }
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
            setVal(resource, data){

            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name_en        = $(`${resource}`).find('.data-name-en').val().replace(noTag, "");
                var data_name_vi        = $(`${resource}`).find('.data-name-vi').val().replace(noTag, "");
                var data_position_en    = $(`${resource}`).find('.data-position-en').val().replace(noTag, "");
                var data_position_vi    = $(`${resource}`).find('.data-position-vi').val().replace(noTag, "");
                var data_executive      = $(`${resource}`).find('[name=executive]:checked').val().replace(noTag, ""); 

                // --Required Value
                if (data_name_en == '' || data_name_vi == '') { required_data.push('Nhập tên.'); onPushData = false }
                if (data_position_en == '' || data_position_vi == '') { required_data.push('Nhập vị trí.'); onPushData = false }
                if (data_image.length <= 0) { required_data.push('Hãy chọn ảnh.'); onPushData = false } 

                if (onPushData) {
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_name_en', data_name_en); 
                    fd.append('data_name_vi', data_name_vi); 
                    fd.append('data_position_en', data_position_en);  
                    fd.append('data_position_vi', data_position_vi);  
                    fd.append('data_executive', data_executive);  

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
            }
        },
        Update: { 
            setVal(resource, data){
                $(`${resource}`).find('.data-id').val(data.data.id);
                $(`${resource}`).find('.data-id-vi').val(data.data_vi.id);
                $(`${resource}`).find('.data-id-en').val(data.data_en.id);
                $(`${resource}`).find('.image-preview').css({
                    'background-image': `url('/${data.data.image ?? 'icon/noimage.png'}')`
                })
                $(`${resource}`).find('.data-name-en').val(data.data_en.name);
                $(`${resource}`).find('.data-position-en').val(data.data_en.position);
                $(`${resource}`).find('.data-name-vi').val(data.data_vi.name);
                $(`${resource}`).find('.data-position-vi').val(data.data_vi.position);
                $(`${resource}`).find(`[name=executive][value=${data.data.type}]`).attr('checked');
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val().replace(noTag, "");
                var data_id_en          = $(`${resource}`).find('.data-id-en').val().replace(noTag, "");
                var data_id_vi          = $(`${resource}`).find('.data-id-vi').val().replace(noTag, "");

                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_executive      = $(`${resource}`).find('[name=executive]:checked').val().replace(noTag, ""); 

                var data_name_en        = $(`${resource}`).find('.data-name-en').val().replace(noTag, "");
                var data_position_en    = $(`${resource}`).find('.data-position-en').val().replace(noTag, "");

                var data_name_vi        = $(`${resource}`).find('.data-name-vi').val().replace(noTag, "");
                var data_position_vi    = $(`${resource}`).find('.data-position-vi').val().replace(noTag, "");

                // --Required Value
                if (data_name_en == '' || data_name_vi == '') { required_data.push('Nhập tên.'); onPushData = false }
                if (data_position_en == '' || data_position_vi == '') { required_data.push('Nhập vị trí.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_id', data_id); 
                    fd.append('data_id_en', data_id_en); 
                    fd.append('data_id_vi', data_id_vi); 
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_name_en', data_name_en); 
                    fd.append('data_name_vi', data_name_vi); 
                    fd.append('data_position_en', data_position_en);  
                    fd.append('data_position_vi', data_position_vi);  
                    fd.append('data_executive', data_executive);  

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
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => { 
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Executive.Store(fd)
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
        Api.Executive.getOne(id)
            .done(res => { 
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
            Api.Executive.Update(fd)
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
        Api.Executive.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });

    })


    function getData(){
        Api.Executive.GetAll()
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
