$(document).ready(function() {
    $('#admissions-form').submit(function(event) {
        event.preventDefault(); // Evita el comportamiento normal del formulario

        // Obtener los datos del formulario
        var formData = $(this).serialize();

        // Enviar el formulario con Ajax
        $.ajax({
            type: 'POST',
            url: 'send_form.php',
            data: formData,
            success: function(response) {
                // Si el envío es exitoso, mostrar el mensaje y limpiar el formulario
                $('#admissions-form')[0].reset(); // Limpia los campos
                var toast = new bootstrap.Toast(document.getElementById('successToast'));
                toast.show(); // Muestra el Toast de éxito
            },
            error: function() {
                alert("Hubo un error al enviar el formulario.");
            }
        });
    });
});
