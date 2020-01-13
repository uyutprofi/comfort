$(document).ready(function() {
    jQuery(function() {
        initMobileNav();
    });

    // mobile menu init
    function initMobileNav() {
        jQuery('body').mobileNavNew({
            menuActiveClass: 'nav-active',
            menuOpener: '.nav-opener'
        });
    }
});

$('.main-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    autoplay: true
});

$(document).ready(function() {
    $("#btn-down").on("click", "a", function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({ scrollTop: top }, 1500);
    });
});

// anchor
$(document).ready(function() {
    $("#nav").on("click", "a", function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({ scrollTop: top }, 1500);
    });
});

// stiki header 
$(window).scroll(function() {
    var top = $(document).scrollTop();
    if (top < 200) $(".sticky-header").removeClass('fixed-header');
    else $(".sticky-header").addClass('fixed-header');
});

// contact-list
$(document).ready(function() {
    $(".contact-list").on("click", "#contact-list-btn", function(e) {
        console.log(this);
        $(".contact-drop-down").fadeIn();
        $(".close").click(".contact-drop-down", function() {
            $(".contact-drop-down").fadeOut();
        });
    });
});

// modal-window
$(document).ready(function() {
    $(".modal-btn").on("click", "a, body", function(e) {
        event.preventDefault();
        var id = $(this).attr('href').fadeIn();
    });

});