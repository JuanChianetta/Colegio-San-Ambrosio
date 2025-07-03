<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/public_html/imagenes/favicon.png" />
</head>
<body>

    <?php include "nav.php"; ?>

    <!-- Banner de Admisiones -->
    <section class="admisiones-banner">
        <div class="banner-overlay">
            <h1 class="animate-text">Contacto</h1>
        </div>
    </section>
    <section class="welcome-section">
        <div class="container">
            <h1 class="welcome-title">Comuniquese con nosotros</h1>
            <!-- <p class="welcome-subtitle">Pasos a seguir para conocernos e iniciar el proceso de admisión:</p> -->
        </div>
    </section>

    <form id="contact-form" action="send_mail.php" method="POST">
        <div class="form-group">
            <label for="name">Nombre <span style="color:red">*</span></label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="lastname">Apellido <span style="color:red">*</span></label>
            <input type="text" id="lastname" name="lastname" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono <span style="color:red">*</span></label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="email">Correo <span style="color:red">*</span></label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="level">Nivel por el que consulta <span style="color:red">*</span></label>
            <select id="level" name="level" required>
                <option value="">Seleccione un nivel</option>
                <option value="Mañana">Secundario</option>
                <option value="Tarde">Tecnicatura</option>
                <option value="Tarde">Profesorado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Comentario <span style="color:red">*</span></label>
            <textarea id="comment" name="comment" rows="4"></textarea>
        </div>

        <button type="submit" class="btn-submit">ENVIAR</button>
    </form>

    <div class="container">
        <h2 class="my-4">¿Donde Encontrarnos?</h2>
        <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.93222793666!2d-58.42666192444194!3d-34.580581356276454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb584b98b606f%3A0xb34013de3fb4e925!2sInstituto%20San%20Ambrosio!5e0!3m2!1ses!2sar!4v1725484526408!5m2!1ses!2sar"
            width="100%" 
            height="400px" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery para manejar el envío por Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Incluir el archivo JavaScript externo -->
    <!--<script src="contacto.js"></script>-->


    
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
    <div class="toast-container" id="toastContainer">
        <div id="statusToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header">
                <strong class="me-auto">Estado del Envío</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastMessage"></div>
        </div>
    </div>
</div>

<!-- Script para controlar el toast -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var urlParams = new URLSearchParams(window.location.search);
        var toastEl = document.getElementById('statusToast');
        var toastMessage = document.getElementById('toastMessage');
        
        if (urlParams.has('success')) {
            toastMessage.textContent = 'Mensaje enviado exitosamente.';
            toastMessage.classList.add('success');
            var toast = new bootstrap.Toast(toastEl);
            toast.show();
        } else if (urlParams.has('error')) {
            toastMessage.textContent = 'Hubo un error al enviar el mensaje. Inténtalo nuevamente.';
            toastMessage.classList.add('error');
            var toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
</script>

    <!-- Bootstrap JS (necesario para los toasts) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->

</body>
</html>