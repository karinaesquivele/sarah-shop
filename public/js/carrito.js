$( document ).ready(function() {

    $('.tabla2 a').hover(function(){
        $('.tabla2 a i').toggle(250);
    });

    /*$('.btn-update-item').on('click', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var ruta = $(this).data('href');
        var quantity = $('#producto_'+id).val();
        window.location.href = ruta + "/" + quantity;

    });*/
    
    


});