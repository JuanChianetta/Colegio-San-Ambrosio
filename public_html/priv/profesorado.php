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
    <!-- Barra superior de contacto -->
<div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <i class="bi bi-house"></i>
            <span>Colegio San Ambrosio</span>
        </div>
        <div>
            <!-- Icono de Instagram -->
            <a href="https://www.instagram.com/insti.sanambrosio/?hl=es" target="_blank" style="padding-right: 20px">
                <i class="fab fa-instagram"></i>
            </a>
            <i class="bi bi-telephone"></i> (54-11) 3467-2244
            <span class="mx-2">|</span>
            <i class="bi bi-envelope"></i> <a href="mailto:contacto@institutosanambrosio.com<">contacto@institutosanambrosio.com</a>
        </div>
    </div>
</div>

 
<!-- Navbar principal -->
<nav class="navbar navbar-expand-lg navbar-light bg-red">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img class="logo" src="./imagenes/edt/Logo_ISA.png" alt="Colegio San Ambrosio" height="70">
      <span class="text-white">Colegio San Ambrosio</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="./nosotros.php">NOSOTROS</a>
        </li>

        <!-- Menú desplegable de NIVELES -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="./admisiones.php" id="nivelesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NIVELES
          </a>
          <ul class="dropdown-menu" aria-labelledby="nivelesDropdown">
            <li><a class="dropdown-item" href="./secundaria.php">Secundario</a></li>
            <li><a class="dropdown-item" href="./profesorado.php">Profesorado</a></li>
            <li><a class="dropdown-item" href="./tecnicatura.php">Tecnicatura</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="./contacto.php">CONTACTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-light" href="./admisiones.php">ADMISIONES</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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

<footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Columna 1: Logo -->
                <div class="col-md-3">
                    <img src="./imagenes/edt/Logo_ISA.png" alt="Logo" class="footer-logo">
                </div>

                <!-- Columna 2: Enlaces institucionales -->
                <div class="col-md-3">
                    <h5>INSTITUCIONAL</h5>
                    <ul class="list-unstyled">
                        <li><a href="./nosotros.php">Nuestros Colaboradores</a></li>
                        <li><a href="./contacto.php">Contacto</a></li>
                        <li><a href="./admisiones.php">Admisiones</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Niveles -->
                <div class="col-md-3">
                    <h5>NIVELES</h5>
                    <ul class="list-unstyled">
                        <li><a href="./secundaria.php">Secundaria</a></li>
                        <li><a href="./profesorado.php">Profesorado</a></li>
                        <li><a href="./tecnicatura.php">Tecnicatura</a></li>
                    </ul>
                </div>

                <!-- Redes Sociales -->
                <div class="row mt-4">
                    <div class="col text-center footer-social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
        </div>

        <!-- Pie de página -->
        <div class="footer-bottom">
            <p>© 2024 Instituto San Ambrosio - Todos los derechos reservados.</p>
        </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery para manejar el envío por Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Incluir el archivo JavaScript externo -->
    <script src="formulario.js"></script>
</body>
</html>