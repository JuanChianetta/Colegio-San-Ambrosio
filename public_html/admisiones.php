<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admiciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <?php include "nav.php"; ?>

    <!-- Banner de Admisiones -->
    <section class="admisiones-banner">
        <div class="banner-overlay">
            <h1 class="animate-text">Admisiones</h1>
        </div>
    </section>
    <section class="welcome-section">
        <div class="container">
            <h1 class="welcome-title">¡Bienvenidos!</h1>

            <p class="welcome-subtitle">Para comenzar con el proceso de admisión, por favor ingrese a: <a href="#">enlace</a></p>
        </div>
    </section>
     <!-- 
    <form id="admissions-form">
        <div class="form-group">
            <label for="student-name">Nombre y Apellido del Postulante *</label>
            <input type="text" id="student-name" name="student_name" required>
        </div>
        
        <div class="form-group">
            <label for="parent-name">Nombre y Apellido (Madre, Padre o Tutor) *</label>
            <input type="text" id="parent-name" name="parent_name" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono *</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="email">Correo *</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="level">Nivel que se postula *</label>
            <select id="level" name="level" required>
                <option value="">Seleccione un nivel</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
            </select>
        </div>

        <div class="form-group">
            <label for="contact-time">Horario que prefieren ser contactados *</label>
            <select id="contact-time" name="contact_time" required>
                <option value="">Seleccione un horario</option>
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
            </select>
        </div>

        <button type="submit" class="btn-submit">ENVIAR</button>
    </form>
    -->

    <!-- Bootstrap Toast para el mensaje de éxito -->
    <div class="toast position-fixed bottom-0 end-0 p-3" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1050;">
        <div class="toast-header">
            <strong class="me-auto">Envío exitoso</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            El formulario se ha enviado exitosamente.
        </div>
    </div>

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

    <?php include "footer.php";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery para manejar el envío por Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Incluir el archivo JavaScript externo -->
    <script src="formulario.js"></script>
</body>
</html>