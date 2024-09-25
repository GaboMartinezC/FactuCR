let camposValidos;
function VerificarCampos(){
    if($('#input-correo').val() == ''){
        camposValidos = false;
        $('#input-correo').addClass('input-vacio');
    }
    else{
        camposValidos = true;
        $('#input-correo').removeClass('input-vacio');
    }
    if(camposValidos){
        if($('#input-contra').val() == ''){
            camposValidos = false;
            $('#input-contra').addClass('input-vacio');
        }
        else{
            camposValidos = true;
            $('#input-contra').removeClass('input-vacio');
        }
    }
    console.log(camposValidos);
    if(!camposValidos){
        $('#btn-login').attr('disabled', 'disabled');
        console.log('btn deshabilitado');
    }else{
        $('#btn-login').removeAttr('disabled');
        console.log('btn habilitado');
    }
}

$(document).ready(function () {
    if(!camposValidos){
        $('#btn-login').attr('disabled', 'disabled');
        console.log('btn deshabilitado');
    }else{
        $('#btn-login').removeAttr('disabled');
        console.log('btn habilitado');
    }
});
$(document).on('keyup', function (e) {
    VerificarCampos();
})