$(document).ready(function () {
    $("#FormularioAgregarProducto").submit(function (event) {
        event.preventDefault();
        var form = $('#FormularioAgregarProducto')[0];
        var formData = new FormData(form);
        console.log(formData.get('inputCodigo'));

        $.ajax({

            type: "POST",
            url: '/productos/nuevo',
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function (response ) {
                console.log(response.mensaje)
            },
            error: function(response ){
                console.log(response)
            }
        });

    });
});
