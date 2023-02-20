const View = {
    Category: {
        render(data){
            data.map(v => {
                $(".foodmenu_carousel_two")
                    .append(`<div class="food-grid-item grid-style-four">
                                <div class="food-thumb">
                                    <img src="${v.image}" alt="Food">
                                    <div class="overlay">
                                        <a href="#" class="food-info">
                                            <h3 class="food-title">${v.name}</h3>
                                            <div class="read-more"><span class="icon-next4"></span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>`)
            })
            var $foodmenu_carousel2 = $('.foodmenu_carousel_two');
            if ($foodmenu_carousel2.length) {
                var items = 4;
                $foodmenu_carousel2.owlCarousel({
                    center: false,
                    items: items,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 700,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1400: {
                            items: items
                        }
                    }
                });
            }
            $('.food-menu-block.style-six .carousel-nav-text .btn-prev').click(function () {
                $foodmenu_carousel2.trigger('prev.owl.carousel');
            });
            $('.food-menu-block.style-six .carousel-nav-text .btn-next').click(function () {
                $foodmenu_carousel2.trigger('next.owl.carousel');
            });
        }
    },
    Product: {
        bestDiscount(data){
            $(".best-discount-item")
                .append(`<div class="special-food-bg bg-image" style="background-image:url('${data.image}')"></div>
                        <div class="special-food-content-inner">
                            <div class="special-food-content-text">
                                <h3 class="food-title">${data.name}</h3>
                                <div class="food-price"><del>${data.prices}$</del> ${data.prices - (data.prices * data.percent / 100)}$</div>
                                <p>${data.description}</p>
                                <div class="btn-group-default">
                                    <a href="/product/${data.id}-${data.slug}" class="btn btn-default btn-black">VIEW PRODUCT</a>
                                    <a href="#" class="btn btn-default">ADD TO CART</a>
                                </div>
                            </div>
                        </div>`)
        },
        newItem(data){
            data.map(v => {
                $('.data-new-item')
                    .append(`<div class="col-lg-6">
                                <div class="food-grid-item grid-style-five gird-style">
                                    <div class="food-thumb">
                                        <img src="${v.data_product.image}">
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="/product/${v.data_product.id}-${v.data_product.slug}">Mozzarella Sticks</a>
                                        </h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">${v.data_product.prices}$</div>
                                        </div>
                                        <div class="food-info-content">
                                            <p>${v.data_product.description}</p>
                                            <a class="read-more" href="/product/${v.data_product.id}-${v.data_product.slug}">Buy now <span class="icon-next4"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>`) 
            })
           
        }
    },
    init(){

    }
};
(() => {
    View.init();
    function init(){
        getCategory();
        getBestDiscount();
        getNewItem();
    }


    function getCategory(){
        Api.Category.GetAll()
            .done(res => {
                View.Category.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    function getBestDiscount(){
        Api.Product.GetBestDiscount()
            .done(res => {
                View.Product.bestDiscount(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    function getNewItem(){
        Api.Product.getNewItem()
            .done(res => {
                View.Product.newItem(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }


    init();
})();
