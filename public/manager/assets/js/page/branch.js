const View = {
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                data.name,   
                data.address,   
                `<label class="switch" data-id="${data.id}" atr="Status"> <span class="slider round ${data.status == '1' ? 'active' : ''}"></span> </label>`,
                `<div class="view-data tab-action" atr="View" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
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
                        width: '10%',
                    },
                    {
                        title: 'Địa chỉ',
                        name: 'name',
                        orderable: true, 
                    }, 
                    {
                        title: 'Trạng thái',
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
    Data: {
        Executive: [],
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
                data.map((v, k) => {
                    $(`${resource}`)
                        .find('.data-writer')
                        .append(`<div class="radio">
                                    <input id="radio${k}" name="writer" value="${v.executive_id}" type="radio" ${ k == 0 ? "checked" : "" }>
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
 
                var data_address        = $(`${resource}`).find('.data-address').val().replace(noTag, "");
                var data_name        = $(`${resource}`).find('.data-name').val().replace(noTag, "");

                // --Required Value
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }
                if (data_address == '') { required_data.push('Nhập địa chỉ.'); onPushData = false } 

                if (onPushData) { 
                    fd.append('data_address', data_address); 
                    fd.append('data_name', data_name); 

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
                View.Data.Executive.map((v, k) => {
                    $(`#popup-update`)
                        .find('.data-writer')
                        .append(`<div class="radio">
                                    <input id="radio${k}" name="writer" value="${v.executive_id}" type="radio">
                                    <label for="radio${k}">${v.name}</label>
                                </div>`);
                })
                $(`${resource}`).find('.data-id').val(data.data.id);
                $(`${resource}`).find('.data-id-vi').val(data.data_vi.id);
                $(`${resource}`).find('.data-id-en').val(data.data_en.id);
                $(`${resource}`).find('.image-preview').css({
                    'background-image': `url('/${data.data.image ?? 'icon/noimage.png'}')`
                })
                $(`${resource}`).find('.data-link').val(data.data.link_url);
                $(`${resource}`).find('.data-title-en').val(data.data_en.title);
                $(`${resource}`).find('.data-description-en').val(data.data_en.description);
                IndexView.summerNote.update(`${resource} .data-detail-vi`, data.data_vi.detail); 
                $(`${resource}`).find('.data-title-vi').val(data.data_vi.title);
                $(`${resource}`).find('.data-description-vi').val(data.data_vi.description);
                IndexView.summerNote.update(`${resource} .data-detail-en`, data.data_en.detail); 

                $(document).find(`${resource}`).find(`[name=writer][value=${data.data.executive_id}]`).prop('checked', true);;
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
                var data_writer         = $(`${resource}`).find('[name=writer]:checked').val().replace(noTag, ""); 

                var data_title_en        = $(`${resource}`).find('.data-title-en').val().replace(noTag, "");
                var data_title_vi        = $(`${resource}`).find('.data-title-vi').val().replace(noTag, "");
                var data_description_en    = $(`${resource}`).find('.data-description-en').val().replace(noTag, "");
                var data_description_vi    = $(`${resource}`).find('.data-description-vi').val().replace(noTag, "");
                var data_detail_en      = $(`${resource}`).find('.data-detail-en').val();
                var data_detail_vi      = $(`${resource}`).find('.data-detail-vi').val();
                var data_writer         = $(`${resource}`).find('[name=writer]:checked').val().replace(noTag, ""); 
                var data_link           = $(`${resource}`).find('.data-link').val().replace(noTag, "");

                // --Required Value
                if (data_title_en == '' || data_title_vi == '') { required_data.push('Nhập tiêu đề.'); onPushData = false }
                if (data_description_en == '' || data_description_vi == '') { required_data.push('Nhập mô tả ngắn.'); onPushData = false }
                if (data_detail_en == '' || data_detail_vi == '') { required_data.push('Nhập nội dung.'); onPushData = false }
                if (data_link == '') { required_data.push('Nhập link đăng kí.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_id', data_id); 
                    fd.append('data_id_en', data_id_en); 
                    fd.append('data_id_vi', data_id_vi); 
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_title_en', data_title_en); 
                    fd.append('data_title_vi', data_title_vi); 
                    fd.append('data_description_en', data_description_en);  
                    fd.append('data_description_vi', data_description_vi); 
                    fd.append('data_detail_en', data_detail_en);  
                    fd.append('data_detail_vi', data_detail_vi);  
                    fd.append('data_writer', data_writer);  
                    fd.append('data_link', data_link);  

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
        Icon.render(".icon-list-data");
        $(document).on('click', '.icon-preview', function() {
            $(".icon-list-data").addClass("is-open")
        });
        $(document).mouseup(function(e) {
            var container = $(".icon-list-data");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.icon-list-data').removeClass('is-open');
            }
        });
        $(document).on('click', '.icon-list-data span', function() {
            let icon = $(this).attr("data-icon");
            $(".data-icon-val").val(icon)
            $(".icon-preview").html(`<span class="${icon}" data-icon="${icon}"></span>`);
            $('.icon-list-data').removeClass('is-open');
        });
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => { 
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Branch.Store(fd)
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
        Api.Branch.getOne(id)
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
            Api.Branch.Update(fd)
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
        Api.Branch.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });

    })

    IndexView.table.onSwitch(debounce((item) => {
        Api.Branch.Trending(item.attr('data-id'))
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
        Api.Branch.GetAll()
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
