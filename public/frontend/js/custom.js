
new WOW().init();


$(document).ready(function () {
        $('.footer_box h5').click(function () {
            var e = window, a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }
            var result = { width: e[a + 'Width'], height: e[a + 'Height'] };
            if (result.width < 768) {							
                $(this).siblings('.list').slideToggle("slow");
            }
        });
    });


/*=================== owlCarousel ====================*/		

$('#slide').owlCarousel({
	autoplay:true,	
    loop:true,
	nav:false,
	dots: true,
    margin:0,		
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        768:{
            items:1,
            nav:true,
            loop:true
        }
    }
});


$('a.show-submenu').on("click",function() {
    $(this).next().toggleClass("show_normal");
});



$(window).load('resize load',function(){
if( $(this).width() > 100 )
{

$('a.open_close').on("click",function() {
    $('.cmn-toggle-switch').toggleClass('active')
});

$('a.open_close').on("click",function() {
    $('.main-menu').slideToggle('show');
    $('.layer').toggleClass('layer-is-visible');
});

}
else
{

$('.cmn-toggle-switch').removeClass('active');
$('.main-menu').removeClass('show');

}   
});




var $ = jQuery.noConflict();
    var $grid = $('.grid').isotope({});
    // filter items on button click
        $('.filter-button-group').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });


$('.gallery_list .filter-button-group button').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
});


