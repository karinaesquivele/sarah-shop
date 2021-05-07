$( document ).ready(function() {
    /*efecto botón slider*/
    $('.item2 a').hover(function(){
        $('.item2 p a i').toggle(250);
    });

    /*Efecto botones categorias*/ 
    $('.bt1 a').hover(function(){
        $('.bt1 i').toggle(250);
    });

    $('.bt2 a').hover(function(){
        $('.bt2 i').toggle(250);
    });

    $('.bt3 a').hover(function(){
        $('.bt3 i').toggle(250);
    });

    $('.bt4 a').hover(function(){
        $('.bt4 i').toggle(250);
    });



   /* $('.item2 a').mouseout(function(){
        $('.item2 p a i').hide(500);
    });
*/

});