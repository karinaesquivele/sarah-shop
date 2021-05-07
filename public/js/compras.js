$( document ).ready(function() {

    validarNombre();
    validarApellido();
    validarEmail();
    validarTel();
    validarCalle();
    validarCP();
    
    
    
    function validarNombre(){
        $('#nombre').on("input", function() {
          var nam = /^[A-Za-z\s]*$/.test(this.value);
    
            if (!nam) {
                $('.nombre_invalido').css('display','block');
            
                $('.registrar').prop('disabled', true);
                $('.registrar').css('opacity', "0.3");
            }else{
                $('.registrar').css('opacity', "1");
                $('.registrar').prop('disabled', false);
            $('.nombre_invalido').css('display','none');
            }
    
        });
    
    }

    function validarApellido(){
        $('#apellido').on("input", function() {
          var nam = /^[A-Za-z\s]*$/.test(this.value);
    
            if (!nam) {
                $('.apellido_invalido').css('display','block');
            
                $('.registrar').prop('disabled', true);
                $('.registrar').css('opacity', "0.3");
            }else{
                $('.registrar').css('opacity', "1");
                $('.registrar').prop('disabled', false);
            $('.apellido_invalido').css('display','none');
            }
    
        });
    
    }

    function validarEmail(){
        $('#email').on("input", function() {
            var nam = /^[a-z,A-Z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i.test(this.value);
    
            if (!nam) {
                $('.email_invalido').css('display','block');
            
                $('.registrar').prop('disabled', true);
                $('.registrar').css('opacity', "0.3");
            }else{
                $('.registrar').css('opacity', "1");
                $('.registrar').prop('disabled', false);
            $('.email_invalido').css('display','none');
            }
    
        });
    }

    function validarTel(){
        $('#tel').on("input", function() {
            var nam = /^([0-9])*$/.test(this.value);
    
            if (!nam) {
                $('.tel_invalido').css('display','block');
            
                $('.registrar').prop('disabled', true);
                $('.registrar').css('opacity', "0.3");
            }else{
                $('.registrar').css('opacity', "1");
                $('.registrar').prop('disabled', false);
            $('.tel_invalido').css('display','none');
            }
    
        });
    
    }

    function validarCalle(){
        $('#calle').on("input", function() {
            var nam = /^([A-Za-z0-9])*$/.test(this.value);
    
            if (!nam) {
                $('.calle_invalido').css('display','block');
            
                $('.registrar').prop('disabled', true);
                $('.registrar').css('opacity', "0.3");
            }else{
                $('.registrar').css('opacity', "1");
                $('.registrar').prop('disabled', false);
            $('.calle_invalido').css('display','none');
            }
    
        });
    
    }

    function validarCP(){
        $('#cp').on("input", function() {
            var nam = /^([0-9])*$/.test(this.value);
    
            if (!nam) {
                $('.cp_invalido').css('display','block');
            
                $('.registrar').prop('disabled', true);
                $('.registrar').css('opacity', "0.3");
            }else{
                $('.registrar').css('opacity', "1");
                $('.registrar').prop('disabled', false);
            $('.cp_invalido').css('display','none');
            }
    
        });
    
    }



});