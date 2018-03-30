
$( document ).ready(function() {

    $('.cart-top').hover( function(e){

        $('#cartDetails').removeClass('hiddenn', { duration : 50000 });
        //$('#cartDetails').animate( { display : 'block'}, { duration : 100 });
        console.log('hover');

    }, function(){
        $('#cartDetails').addClass('hiddenn');
        //$('#cartDetails').animate( { display : 'none'}, { duration : 100 });
        console.log('mouseout');
    });

    /*$('.cart-top').mouseout( function(){

    });*/

    $('.navTrigger').click(function(){
        $(this).toggleClass('active');
        $('.list-menu').toggleClass('menu-actived');
    });

});