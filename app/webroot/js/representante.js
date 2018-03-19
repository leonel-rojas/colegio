$(document).ready(function(){
    $('.buscarRepresentante').on('click', function(event) {
        $.ajax({
            type: "POST",
            url: basePath + "personas/buscarRepresentante",
            data: {
                cedula: $(this).attr("cedula")
            },
            dataType: "html",
            success: function(data) {
              alert('Funciona!!!');
                //$('#msg').html('<div class="alert alert-success flash-msg"> Agregado al pedido.</div>');
                //$('.flash-msg').delay(2000).fadeOut('slow');
            },
            error: function(){
                alert('Tenemos problemas!!!');
            }
        });
        return false;
    });
});
