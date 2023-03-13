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
    init(){
        setInterval(function() {
            IndexView.ImageDelay();
        }, 1000); 
    }
};
(() => {
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