
$(document).ready(function(){
    $(window).scroll(function() {
        posicionarMenu();
    });

    function posicionarMenu() {
        var altura_del_header = $('.header').outerHeight(true);
        var altura_del_menu = $('.menu').outerHeight(true);


        if ($(window).scrollTop() >= altura_del_header){
            $('.menu').addClass('colorNav');
            $('.nav-item').addClass('itemsColor');
            $(".escritorio").addClass('fijo');
            $(".movil").addClass('fijo');

        } else {
            $('.menu').removeClass('colorNav');
            $('.nav-item').removeClass('itemsColor');
            $(".escritorio").removeClass('fijo');
            $(".movil").removeClass('fijo');
            

        }
    }


    $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});