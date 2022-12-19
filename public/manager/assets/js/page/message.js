const View = {
    init(){
    }
};
(() => {
    View.init();
    function init(){
        getData();
    }
    function getData(){
        Api.Message.GetAll()
            .done(res => {

            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }


    init();
})();
