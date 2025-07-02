<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesorado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <?php include "nav.php"; ?>

    <!-- Banner de Admisiones -->
    <section class="admisiones-banner">
        <div class="banner-overlay">
            <h1 class="animate-text">Profesorados</h1>
        </div>
    </section>
    <section class="welcome-section">
        <div class="container">
            <h2 class="welcome-title">Formar jóvenes capaces de liderar su propio proyecto personal y profesional.</h2>
            <p class="welcome-subtitle">El proyecto de Florida Day School, en Senior School, apunta a una propuesta de calidad en el dominio de la lengua inglesa. Con este fin, preparamos a nuestros alumnos para rendir los Exámenes Internacionales de la Universidad de Cambridge a lo largo de todo el ciclo; constan de dos niveles, dentro de la propuesta de Inglés como primera lengua:
            Entre Senior 1 y Senior 2, los I.G.C.S.E. (International General Certificate of Secondary Education). En Senior 2, completarán la batería de exámenes del I.G.C.S.E. que hayan elegido en Senior 1. Es obligatorio rendir cuatro exámenes como mínimo. En Senior 3, los A.S. (Advanced Subsidiary).</p>
        </div>
    </section>

    <section class="custom-banner-section">
        <div class="custom-overlay">
            <div class="custom-content">
            <h1>Los alumnos como protagonistas de su propio proceso</h1>
            <p>El ideario pedagógico de Florida Day School se basa en el protagonismo que ejerce la persona que aprende. Por esta razón, los alumnos juegan un rol activo en su propio proceso, y la propuesta se sustenta en la motivación por aprender, la reflexión sobre los procesos y la auto evaluación de los logros. Senior School se caracteriza por consolidar la autonomía de los alumnos y por desarrollar un clima de libertad con responsabilidad.</p>
            </div>
        </div>
    </section>

    <section class="admisiones-banner" style="background-image: url('./imagenes/secundaria2.jpg');">
        <div class="banner-overlay">
            <!-- <h1 class="animate-text">Secundaria</h1> -->
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery para manejar el envío por Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Incluir el archivo JavaScript externo -->
    <script src="formulario.js"></script>
</body>
</html>