$(document).ready(function () {

    // preloader
    var preloader = function () {
        $("body").append($('<div/>').addClass('preloader'));
        $("body").append($('<span/>').addClass("icon-refresh animation_preloader"));
        $(".promo-block-order").css("display", "none");
    };

    $(".promo-block-order, .btn-order, #check, #confirm_order").on("click", function (t) {
        return 2 === t.which || t.ctrlKey ? void 0 : preloader();
    });

    $('.menu-item').each(function () {
        var menuItemText = $(this).find("a").text().toLowerCase();
        if (menuItemText == "order") {
            $(this).on("click", function (t) {
                return 2 === t.which || t.ctrlKey ? void 0 : preloader();
            });
            return;
        }
    });
    // preloader end

    $('#block__text').insertAfter('#block__elements').css({display: 'block'});

    /* EMAIL VALIDATION */

    /*    function validateEmail(email) {
     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     return re.test(email);
     }

     var discountBtn = document.getElementById('check');
     if ( discountBtn != null ) {
     discountBtn.onclick = function() {
     var currenturl = window.location.href.split('?')[0],
     email = document.getElementById('discountemail').value,
     discountcode = 'dsc_code=first15';

     if (validateEmail(email)) {
     document.location.href = currenturl + '/order?email=' + email + '&' + discountcode;
     } else {
     document.location.href = currenturl + '/order?' + discountcode;
     }
     };
     }*/


    /* BROWSER WINDOW SCROLL (IN PIXELS) AFTER WHICH THE "BACK TO TOP" LINK IS SHOWN */

    var offset = 300,
        offset_opacity = 1200, /* browser window scroll (in pixels) after which the "back to top" link opacity is reduced */
        scroll_top_duration = 700, /* duration of the top scrolling animation (in ms) */
        $back_to_top = $('.js-back-to-top');
    /* grab the "back to top" link */


    /* HIDE OR SHOW THE "BACK TO TOP" LINK */

    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('back-to-top-is-visible') : $back_to_top.removeClass('back-to-top-is-visible back-to-top-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('back-to-top-fade-out');
        }
    });


    /* SMOOTH SCROLL TO TOP */

    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration);
    });

    /* OWL CAROUSEL */

    $(".owl-carousel-universities-six-item").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: ['', ''],
        navContainer: '.owl-controls-universities-six-item',
        margin: 30,
        autoplay: 0,
        smartSpeed: 450,
        autoplaySpeed: 1000,
        responsive: {
            // breakpoint from 0 up
            0: {items: 1},
            // breakpoint from 480 up
            480: {items: 2},
            // breakpoint from 550 up
            550: {items: 2},
            // breakpoint from 768 up
            768: {items: 3},
            // breakpoint from 992 up
            992: {items: 4},
            // breakpoint from 1199 up
            1199: {items: 6}
        }
    });

    $("#testimonials").owlCarousel({
        margin: 30,
        responsive: {
            0: {items: 1, loop: true},
            768: {items: 2, dots: true, autoplay: true},
            992: {items: 3, dots: false, loop: false, mouseDrag: false, touchDrag: false}
        }
    });

    $("#samples_slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navContainer: '.owl-controls-controls-work',
        navText: ['', ''],
        dots: false,
        autoplay: true,
        smartSpeed: 450,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {items: 1},
            768: {items: 2},
            992: {items: 3}
        }
    });

    // Custom Navigation Events
    $('#owl-controls-work-prev').click(function () {
        $("#samples_slider").trigger('prev.owl.carousel');
    });
    $('#owl-controls-work-next').click(function () {
        $("#samples_slider").trigger('next.owl.carousel', [300]);
    });

    /* ZOPIM CHAT */

    window.$zopim || function (t, e) {
        var n = $zopim = function (t) {
            n._.push(t)
        }, s = n.s = t.createElement(e), i = t.getElementsByTagName(e)[0];
        n.set = function (t) {
            n.set._.push(t)
        }, n._ = [], n.set._ = [], s.async = !0, s.setAttribute("charset", "utf-8"), s.src = "//v2.zopim.com/?xwzASiZfXmIZvbjoYBIdDdw55lTdDa09", n.t = +new Date, s.type = "text/javascript", i.parentNode.insertBefore(s, i)
    }(document, "script");

    $zopim(function () {
        $zopim.livechat.theme.setColor('#00bcd4');
        $zopim.livechat.theme.reload(); // apply new theme settings
    });

    // adv-tabs

    $('.testimonials-slider__nav').on('click', 'li:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('.testimonials-slider__main').find('.testimonials-slider__pic').removeClass('active').eq($(this).index()).addClass('active');
    });

    // testimonials-slider

    $('.adv-switch').on('click', 'li:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('.adv-tab').find('.adv-tab__container').removeClass('active').eq($(this).index()).addClass('active');
    });

   
    // equal height

    $('.adv-container-equal').each(function(){  
      
      var highestBox = 0;

      $('.adv-block-equal', this).each(function(){

        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      
      }); 
      
      $('.adv-block-equal',this).height(highestBox);
                    
    });

    $(function () {
        $("#mySlider1").AnimatedSlider({
            prevButton: "#btn_prev1",
            nextButton: "#btn_next1",
            visibleItems: 3,
            infiniteScroll: true,
            willChangeCallback: function (obj, item) {
                $("#statusText").text("Will change to " + item);
            },
            changedCallback: function (obj, item) {
                $("#statusText").text("Changed to " + item);
            }
        });
    });

 

});
