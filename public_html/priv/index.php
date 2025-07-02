<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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



<!-- Carrusel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <!-- Primera Imagen -->
    <div class="carousel-item active" style="background-image: url('./imagenes/edt/img_secundaria_2_edt.JPG');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Educación Bilingüe</h5>
        <p>Va más allá que hablar un segundo idioma; implica enfocar la realidad de determinada manera...</p>
      </div>
    </div>
    <!-- Segunda Imagen -->
    <div class="carousel-item" style="background-image: url('./imagenes/edt/edt_img_docente_2.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Valores en Acción</h5>
        <p>Fomentamos la empatía, la colaboración y el respeto en todas nuestras actividades.</p>
      </div>
    </div>
    <!-- Tercera Imagen -->
    <div class="carousel-item" style="background-image: url('./imagenes/edt/edt_img_deco_2.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Aprendizaje Activo</h5>
        <p>Potenciamos el aprendizaje mediante experiencias interactivas y significativas.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<div class="container text-center pilares">
    <h2>Nos proponemos lograr la formación integral de niños autónomos, <br>reflexivos y comprometidos con su aprendizaje.</h2>
    <p>Nuestra propuesta se basa en 3 pilares:</p>
    
    <div class="row">
        <!-- Pilar 1 -->
        <div class="col-md-4">
            <div class="icono-circulo">
                <img src="icono-pensamiento.png" alt="Pensamiento Efectivo">
            </div>
            <h5>Pensamiento Efectivo</h5>
        </div>
        
        <!-- Pilar 2 -->
        <div class="col-md-4">
            <div class="icono-circulo">
                <img src="icono-inteligencias.png" alt="Inteligencias Múltiples">
            </div>
            <h5>Inteligencias Múltiples</h5>
        </div>
        
        <!-- Pilar 3 -->
        <div class="col-md-4">
            <div class="icono-circulo">
                <img src="icono-comprension.png" alt="Enseñanza para la Comprensión">
            </div>
            <h5>Enseñanza para la Comprensión</h5>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row g-0">
        <!-- Imagen 1 -->
        <div class="col-md-4">
            <a href="pagina1.html">
                <div class="image-container">
                    <img src="./imagenes/edt/img_secundaria_9_edt.JPG" alt="Imagen 1">
                    <div class="overlay color-green">
                        <h3>Secundaria</h3>
                        <!-- <p>2 a 5 años</p> -->
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Imagen 2 -->
        <div class="col-md-4">
            <a href="pagina2.html">
                <div class="image-container">
                    <img src="./imagenes/profesorado.jpeg" alt="Imagen 2">
                    <div class="overlay color-orange">
                        <h3>Profesorados</h3>
                        <!-- <p>6 a 11 años</p> -->
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Imagen 3 -->
        <div class="col-md-4">
            <a href="pagina3.html">
                <div class="image-container">
                    <img src="./imagenes/tecnicatura.jpg" alt="Imagen 3">
                    <div class="overlay color-lightblue">
                        <h3>Tecnicaturas</h3>
                        <!-- <p>12 a 14 años</p> -->
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>



<!-- <div class="container my-5">
    <h2 class="mb-4">Novedades</h2>
    <div id="novedadesCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    Novedad 1
                    <div class="col-md-4">
                        <div class="news-card">
                            <img src="./imagenes/equipo.jpg" alt="Novedad 1">
                            <div class="news-card-body">
                                <div class="news-tag">Senior School</div>
                                <p class="news-date">28 de Agosto 2024</p>
                                <h5>Tres alumnos de FDS fueron premiados con cuatro distinciones...</h5>
                                <p>Con mucha alegría queremos compartirles que tres alumnos de FDS obtuvieron...</p>
                            </div>
                            <div class="news-card-footer">
                                <a href="#" class="btn btn-outline-primary btn-sm">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    Novedad 2
                    <div class="col-md-4">
                        <div class="news-card">
                            <img src="./imagenes/kinder-celebracion.jpg" alt="Novedad 2">
                            <div class="news-card-body">
                                <div class="news-tag" style="background-color: #8bc34a;">Kindergarten</div>
                                <p class="news-date">10 de Julio 2024</p>
                                <h5>Así celebramos el Día de la Independencia en nuestro Kinder</h5>
                                <p>Los alumnos/as de K5A, junto a sus familias, disfrutaron de una jornada especial...</p>
                            </div>
                            <div class="news-card-footer">
                                <a href="#" class="btn btn-outline-primary btn-sm">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    Novedad 3
                    <div class="col-md-4">
                        <div class="news-card">
                            <img src="./imagenes/vela-torneo.jpg" alt="Novedad 3">
                            <div class="news-card-body">
                                <div class="news-tag" style="background-color: #d32f2f;">Institucional</div>
                                <p class="news-date">03 de Julio 2024</p>
                                <h5>¡Alumnos de FDS representando a Argentina en el Mundial!</h5>
                                <p>Felicitaciones a Vicente Carloni, alumno de M2, por coronarse campeón en...</p>
                            </div>
                            <div class="news-card-footer">
                                <a href="#" class="btn btn-outline-primary btn-sm">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            Más items del carrusel pueden ir aquí
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="news-card">
                            <img src="./imagenes/equipo.jpg" alt="Novedad 1">
                            <div class="news-card-body">
                                <div class="news-tag">Senior School</div>
                                <p class="news-date">28 de Agosto 2024</p>
                                <h5>Tres alumnos de FDS fueron premiados con cuatro distinciones...</h5>
                                <p>Con mucha alegría queremos compartirles que tres alumnos de FDS obtuvieron...</p>
                            </div>
                            <div class="news-card-footer">
                                <a href="#" class="btn btn-outline-primary btn-sm">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-card">
                            <img src="./imagenes/kinder-celebracion.jpg" alt="Novedad 2">
                            <div class="news-card-body">
                                <div class="news-tag" style="background-color: #8bc34a;">Kindergarten</div>
                                <p class="news-date">10 de Julio 2024</p>
                                <h5>Así celebramos el Día de la Independencia en nuestro Kinder</h5>
                                <p>Los alumnos/as de K5A, junto a sus familias, disfrutaron de una jornada especial...</p>
                            </div>
                            <div class="news-card-footer">
                                <a href="#" class="btn btn-outline-primary btn-sm">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-card">
                            <img src="./imagenes/vela-torneo.jpg" alt="Novedad 3">
                            <div class="news-card-body">
                                <div class="news-tag" style="background-color: #d32f2f;">Institucional</div>
                                <p class="news-date">03 de Julio 2024</p>
                                <h5>¡Alumnos de FDS representando a Argentina en el Mundial!</h5>
                                <p>Felicitaciones a Vicente Carloni, alumno de M2, por coronarse campeón en...</p>
                            </div>
                            <div class="news-card-footer">
                                <a href="#" class="btn btn-outline-primary btn-sm">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#novedadesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#novedadesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div> -->


<div class="container">
    <h2 class="my-4">¿Dónde Encontrarnos?</h2>
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
</body>
</html>