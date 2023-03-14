const IndexView = {
    validateEmail(email){
        return email.match( /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ );
    },
    validateNumber(number){
        return number.match( /^-?[\d.]+(?:e-?\d+)?$/ );
    },
    pressNumber(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    },
    formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    },
    ImageDelay(){
        $("[data-delay-src]").each(function(index, el) {
            let src = $(this).attr("data-delay-src");
            $(this).attr("src", src);
        });
        $("[data-delay-bg]").each(function(index, el) {
            let src = $(this).attr("data-delay-bg");
            $(this).css({
                "background-image" : `url('${src}')`
            });
        });
    },
    Config: {
        onNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        },
        isEmail(email){
            return email.match( /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ );
        },
        formatPrices(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        },
        toNoTag(string){
            return string.replace(/(<([^>]+)>)/ig, "");
        },
    },
    Cart: { 
        add_to_card(name, callback){
            $(document).on('click', `.action-add-to-card`, function() {
                if($(this).attr('atr').trim() == name) {
                    callback($(this));
                }
            });
        },
        update(){
            var card_data = localStorage.getItem("miracle-card")
            var count = (card_data == null || card_data == "") ? 0 : card_data.split(",").length;
            $(".cart-count .count").html(count)
        }
    },
    init(){
        setInterval(function() {
            IndexView.ImageDelay();
        }, 1000); 
        IndexView.Cart.update();
    }
};
(() => {
    IndexView.Cart.add_to_card("Add to card", (item) => {
        var card        = localStorage.getItem("miracle-card"); 
        var data_id     = item.attr("data-id");
        if (card == null || card == "") {
            localStorage.setItem("miracle-card", data_id);  
        }else{
            var card_array  = card.split(",");
            hasId = card_array.includes(data_id)
            if (!hasId) {
                card_array.push(data_id) 
                localStorage.setItem("miracle-card", card_array.toString()); 
            }
        }
        // if (IndexView.Auth.isLogin()) updateCartUser();
        item.html(`<i class="fas fa-check"></i>`)
        IndexView.Cart.update();
    })

    function getCart(){
        if (IndexView.Auth.isLogin()) {
            Api.Cart.GetCart()
                .done(res => { 
                    if (res.status == 200) {
                        var cart = localStorage.getItem("miracle-card") == null ? [] : localStorage.getItem("miracle-card").split(","); 
                        if (res.data.cart != null) {
                            res.data.cart.split(",").map(v => {
                                cart.includes(v) ? "" : cart.push(v);
                            })
                            localStorage.setItem("miracle-card", cart);
                        }
                        updateCartUser();
                    }else{
                        redirect_logined(res.data)
                    }
                })
        }
    }
    function updateCartUser(){
        var cart = localStorage.getItem("miracle-card");
        if (cart != null) {
            var fd = new FormData();
            fd.append('cart', cart); 
            Api.Cart.Update(fd)
                .done(res => {
                    IndexView.Cart.update();
                })
                .fail(err => {  })
                .always(() => { });
        }
    }
    $(".account-control").on("click", function(){
        $("header").toggleClass("account-config-open")
    })

    $(document).mouseup(function(e) {
        var container = $(".I-header");
        if (!container.is(e.target) && container.has(e.target).length === 0)  $('header').removeClass('account-config-open');
    });

    $(".open-sub-nav").on("click", function(){
        $("header").toggleClass("account-sp-config-open")
        $(".open-sub-nav i").toggleClass("fa-bars")
        $(".open-sub-nav i").toggleClass("fa-times")
    })

    $(document).on('click', '[modal-control]', function() {
        var name = $(this).attr('modal-control')
        $(`.I-modal[modal-block=${name}]`).addClass('active');
        $("html").addClass("o-hidden")
    });
    $(document).mouseup(function(e) {
        var container = $(".modal-dialog");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.I-modal').removeClass('active');
            $("html").removeClass("o-hidden")
        }
    });
    $(document).on('click', '[modal-close]', function() {
        var name = $(this).attr('modal-close')
        $(`.I-modal[modal-block=${name}]`).removeClass('active');
        $("html").removeClass("o-hidden")
    });
    // Toggle Story Studio
    $(document).on('click', '.story-action', function() {
        $(this).toggleClass("is-open")
    });
    $(document).mouseup(function(e) {
        var container = $(".story-action");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.story-action').removeClass('is-open');
        }
    });
    $(document).on('click', '.modal-dismiss', function() {
        $(this).parent().parent().parent().parent().removeClass('active');
        $("html").removeClass("o-hidden")
    });
    IndexView.init();
    
    $('.show-password').on('click', function() {
        var father = $(this).parent();
        icon = father.find('i');
        icon.toggleClass('fa-eye');
        icon.toggleClass('fa-eye-slash');
        if (father.parent().find('input').attr('type') == "password") {
            father.parent().find('input').attr('type', 'text')
        } else {
            father.parent().find('input').attr('type', 'password')
        }
    })

    $(document).mouseup(function(e) {
        var container = $(".action-wrapper-sp .search-input");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.action-wrapper-sp .search-input').removeClass('is-open');
        }
    });

    $('.action-wrapper-sp .search-wrapper').on('click', function() {
        $(".action-wrapper-sp .search-input").toggleClass("is-open")
    })

})();