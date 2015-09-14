//Parallax
$(document).ready(function(){
    $('.parallax').parallax();
    console.log('parapara');
});

//SideNav
$('.button-collapse').sideNav({
    menuWidth: 300, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
);

//Scroll
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        console.log('clicking');
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top 
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

//header追従
//992pxのとき　.fn-headerHesiveを追加,.navbar-fixed
var wChange = 992;

(function($) {
    $.fn.headerNav = function(option){

        var wWindow = $(window).width();

        if(wWindow <= wChange) {
            $(this).removeClass('fn-headerHesive');
        } else {
            $(this).addClass('fn-headerHesive');
            // Set options
            var options = {
                offset: '#fn-showHere',
                offsetSide: 'fn-hesiveTop',
                classes: {
                    clone:   'banner--clone',
                    stick:   'banner--stick',
                    //unstick: 'banner--unstick'
                }
            };
        // Initialise with options
        var banner = new Headhesive('.fn-headerHesive', options);
        // Headhesive destroy
        // banner.destroy();
        };
        return(this);
    };
})(jQuery);

$('.header').headerNav();


$(window).resize(function(){
    var wWindow = $(window).width();
    
    console.log(wWindow);
    console.log(wChange);
    if(wWindow >= wChange) {
        $('.header').addClass('fn-headerHesive');
        console.log('addClass');
    } else {
         $('.header').removeClass('fn-headerHesive');
         console.log('removeClass');
    }
});


