const View = {
    Category: {
        render(data){
            data.map(v => {
                $(".category-list")
                    .append(`<li>
                            <a data-toggle="tab" href="#foodmenu1" role="tab"><span class=" ${v.icon}"></span>${v.name}</a>
                        </li>`)
            })
        }
    },
    Product: {
        render(data){
            data.map(v => {
                $(".product-list-item")
                    .append(`<div class="col-lg-4 col-md-6">
                                    <div class="food-grid-item grid-style-five">
                                        <div class="food-thumb">
                                            <img src="${v.data_product.image}" alt="Food">
                                            <span class="cat-status popular">popular</span>
                                        </div>
                                        <div class="food-info">
                                            <h3 class="food-title"><a href="#">${v.data_product.name}</a>
                                            </h3>
                                            <div class="food-footer-info">
                                                <div class="food-price">10.<sup>00£</sup></div>
                                                <div class="rating">
                                                    <ul class="list">
                                                        <li class="yellow"><span class="fas fa-star"></span></li>
                                                        <li class="yellow"><span class="fas fa-star"></span></li>
                                                        <li class="yellow"><span class="fas fa-star"></span></li>
                                                        <li class="yellow"><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`)
            })
        },
    },
    init(){

    }
};
(() => {
    View.init();
    function init(){
        getCategory();
        getProduct();
    }


    function getCategory(){
        Api.Category.GetAll()
            .done(res => {
                View.Category.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    function getProduct(){
        Api.Product.GetProduct()
            .done(res => {
                View.Product.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
 

    init();
})();
