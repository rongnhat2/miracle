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
    init(){

    }
};
(() => {
    View.init();
    function init(){
        getCategory();
    }


    function getCategory(){
        Api.Category.GetAll()
            .done(res => {
                View.Category.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }


    init();
})();
