const View = {
    tableData: {
        __generateDTRow(data){
            return [
                data.product_id,
                data.product_name ?? "[Product has been removed]",
                data.quantity,
                data.product_prices + `$`,
            ]
        },
        init(){
            var row_table = [
                    {
                        title: 'ID',
                        name: 'name',
                        orderable: true,
                        width: '5%',
                    },
                    {
                        title: 'Tên sản phẩm',
                        name: 'name',
                        orderable: true,
                    },
                    {
                        title: 'Tổng số lượng',
                        name: 'name',
                        orderable: true,
                    },
                    {
                        title: 'Giá bán lẻ',
                        name: 'name',
                        orderable: true,
                    },
                ];
            IndexView.table.init("#data-table", row_table);
        }
    },
    tableHistory: {
        __generateDTRow(data){
            return [
                data.id,   
                data.branch_name,   
                data.product_name ?? "[Product has been removed]",   
                data.quantity,   
                data.prices ?? "[Product has been removed]",
                `<span class="badge badge-pill badge-${data.history_status == 1 ? "green" : "red"} m-r-5 m-b-5">${data.history_status == 1 ? "Nhập kho" : "Xuất kho"}</span>`,
                `<div class="view-data modal-fs-control" style="cursor: pointer" atr="View" data-id="${data.id}"><i class="anticon anticon-eye"></i></div>`
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
                        title: 'Chi nhánh',
                        name: 'name',
                        orderable: true,
                        width: '10%',
                    },
                    {
                        title: 'Tên sản phẩm',
                        name: 'name',
                        orderable: true, 
                    }, 
                    {
                        title: 'Số lượng',
                        name: 'name',
                        orderable: true, 
                    }, 
                    {
                        title: 'Giá nhập',
                        name: 'name',
                        orderable: true, 
                    }, 
                    {
                        title: 'Trạng thái',
                        name: 'name',
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
    TabData: {
        onChange(name, callback){
            $(document).on('click', `.status-event`, function() {
                $(".status-event").removeClass("is-select");
                $(this).addClass("is-select");
                if($(this).attr('atr').trim() == name) {
                    $(".data-table-wrapper").find("#data-table_wrapper").remove()
                    $(".data-table-wrapper").append(`<table id="data-table" class="table"> </table>`)
                    callback();
                }
            });
        },
    },
    Data: {
        Branch: [],
        Product: [],
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
                View.Data.Branch.map(v => {
                    $(".data-branch").append(`<option value="${v.id}">${v.name}</option>`)
                })
                View.Data.Product.map(v => {
                    $(".data-product").append(`<option value="${v.id}">${v.id} - ${v.name}</option>`)
                })
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;
 
                var data_quantity     = $(`${resource}`).find('.data-quantity').val();
                var data_prices       = $(`${resource}`).find('.data-prices').val();
                var data_branch       = $(`${resource}`).find('.data-branch').val();
                var data_product      = $(`${resource}`).find('.data-product').val();

                // --Required Value
                if (data_quantity == '') { required_data.push('Nhập số lượng.'); onPushData = false }
                if (data_prices == '') { required_data.push('Nhập giá nhập.'); onPushData = false } 

                if (onPushData) { 
                    fd.append('data_branch', data_branch); 
                    fd.append('data_product', data_product); 
                    fd.append('data_quantity', data_quantity); 
                    fd.append('data_prices', data_prices); 

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
        View.tableHistory.init();
    }
};
(() => {
    View.init();
    function init(){
        getHistory(); 
        getBranch(); 
        getProduct(); 
    }

    View.TabData.onChange("Item", () => {
        View.tableData.init();
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        getData();
    })
    View.TabData.onChange("History", () => {
        View.tableHistory.init();
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        getHistory();
    })


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
            Api.Warehouse.Store(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getHistory();
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
        Api.Warehouse.GetDataItem()
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.tableData.__generateDTRow(v));
                    IndexView.table.render();
                })
                IndexView.table.render();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    function getHistory(){
        Api.Warehouse.GetDataHistory()
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.tableHistory.__generateDTRow(v));
                    IndexView.table.render();
                })
                IndexView.table.render();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    function getBranch(){
        Api.Branch.GetAll()
            .done(res => { 
                View.Data.Branch = res.data;
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    } 
    function getProduct(){
        Api.Product.GetAll()
            .done(res => { 
                View.Data.Product = res.data;
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
