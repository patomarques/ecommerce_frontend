
$( document ).ready(function() {

    $('.cart-top').hover( function(e){

        $('#cartDetails').toggleClass('hiddenn', { duration : 3000 });
        //$('#cartDetails').animate( { display : 'block'}, { duration : 100 });
        console.log('hover');
    });

    /*$('.cart-top').mouseout( function(){

    });*/

    $('.navTrigger').click(function(){
        $(this).toggleClass('active');
        $('.list-menu').toggleClass('menu-actived');
    });

    $('body').click(function(){
        $('#cartDetails').addClass('hiddenn', { duration : 3000 });
    });



    var widthScreen   = $(window).width();

    if(widthScreen <= 1204){
        console.log($(document).width());
        $('.cart-top').on('click', function(){
            console.log('ok');
            $('#cartDetails').toggleClass('hiddenn', { duration : 3000 });
        });
    }



});