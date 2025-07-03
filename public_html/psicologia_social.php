<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicología Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/public_html/imagenes/favicon.png" />
    <style>
        .titulo1{
            font-size: 3rem; /* Ajusta tamaño del título */
        }

        .custom-banner-section {
        position: relative;
        background-image: url('./imagenes/sennior.jpg'); /* Reemplaza con la ruta correcta */
        background-size: cover;
        background-position: center;
        height: 450px; /* Ajusta según necesidad */
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .custom-overlay {
        background-color: rgba(0, 47, 108, 0.8); /* Azul oscuro con transparencia */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center; /* Asegura que el texto esté centrado */
        }

        .custom-content {
        text-align: center;
        color: white;
        padding: 40px; /* Mayor espacio alrededor */
        max-width: 60%; /* Limita el ancho para mejor lectura */
        }

        .custom-content h3 {
        font-size: 3rem; /* Ajusta tamaño del título */
        font-weight: bold;
        margin-bottom: 20px; /* Espaciado entre el título y el texto */
        }

        .custom-content p {
        font-size: 1.3rem;
        line-height: 1.5;
        /* max-width: 60%; */
        /* padding: 0 20%; */
        margin: 0 auto; /* Centra el párrafo */
        }

        .study-plan-section {
            background-color: white;
            padding: 50px 0;
            text-align: center;
        }

    .study-plan-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: rgba(0, 0, 0); /* Verde oscuro */
        margin-bottom: 20px;
    }

    .study-plan-box {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 60%;
        margin: 0 auto;
        text-align: left;
    }

    .study-plan-box p {
        font-size: 1.2rem;
        color: #333;
        line-height: 1.6;
    }

    .download-container {
        margin-top: 20px;
    }

    .download-button {
        display: inline-block;
        background-color: #003B6B; /* Verde oscuro */
        color: white;
        font-size: 1.2rem;
        padding: 12px 25px;
        border-radius: 5px;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .download-button i {
        margin-right: 10px;
    }

    .download-button:hover {
        background-color: white; /* Verde más oscuro al pasar el mouse */
        a{
            color: #003B6B;
        }
    }


    </style>
</head>
<body>
   
    <?php include "nav.php"; ?>

    <!-- Banner de Admisiones -->
    <section class="banner" style="background-image: url('./imagenes/colacion_psicologia_social.jpeg');">
        <div class="banner-overlay">
            <h1 class="animate-text">Psicologia Social</h1>
        </div>
    </section>

    <div class="container text-center my-5" style="max-width: 60%; padding: 50px 20px;">
        <h2 class="fw-bold mb-5 titulo1">Psicología Social: Transformación a través del aprendizaje en grupo</h2>
        <p class="fs-5">
            Sumérgete en el fascinante mundo de la Psicología Social, una disciplina creada en Argentina por el Dr. Enrique Pichon Rivière y reconocida a nivel mundial. A través de la teoría del vínculo y la metodología del grupo operativo, esta formación te invita a vivir una experiencia única de aprendizaje que no solo amplía conocimientos, sino que transforma tu manera de ver el mundo y relacionarte con los demás.
        </p>
    </div>

    <section class="custom-banner-section">
        <div class="custom-overlay">
            <div class="custom-content">
            <h3>Los alumnos como protagonistas de su propio proceso</h1>
            <p> En nuestra institución, la formación no se basa solo en la teoría, sino en la vivencia real de la dinámica grupal, donde el aprendizaje se convierte en un proceso de cambio personal y profesional. Desde el primer día, desarrollarás habilidades para la intervención psicosocial en diversos ámbitos: salud, educación, comunidad, empresas y más.

Prepárate para un camino de autoconocimiento, impacto social y crecimiento profesional. Vive la experiencia, transforma tu futuro..</p>
            </div>
        </div>
    </section>

    <section class="study-plan-section">
        <div class="container">
            <h2 class="study-plan-title">Propuesta Académica</h2>
            <div class="study-plan-box">
                <p>
                    La <strong>Tecnicatura Superior en Psicología Social</strong> ofrece una formación integral para intervenir en problemáticas grupales y comunitarias. Con una duración de 3 años y un enfoque práctico, esta carrera te prepara para trabajar en áreas como salud, educación y desarrollo social, diseñando estrategias de cambio y crecimiento en diferentes contextos.
                </p>
                <p>
                    A lo largo de la formación, los estudiantes adquieren habilidades para el diagnóstico, la mediación y la intervención en distintos ámbitos, con un fuerte compromiso ético y social. El programa combina el estudio de teorías psicosociales con experiencias prácticas en escenarios reales.
                </p>
            </div>
            <div class="download-container">
                <a href="Plan_de_Estudios.pdf" download class="download-button">
                    <i class="fas fa-file-download"></i> Descargar Programa
                </a>
            </div>
        </div>
    </section>



    <section class="welcome-section">
        <div class="container">
            <h1 class="welcome-title">Nuestros colaboradores</h1>
            <!-- <p class="welcome-subtitle">Pasos a seguir para conocernos e iniciar el proceso de admisión:</p> -->
        </div>
    </section>

    <section class="collaborators-section">
        <div class="container">
            <div class="row row-container">
                <!-- Tarjeta 1 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador_1.php')">
                        <img src="./imagenes/Gabriela_maria_romero.png" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Gabriela María Romero</h5>
                            <p class="card-text">Profesora</p>
                            <a href="detalle_colaborador_2.php" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Andrea Baccarelli</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador_2.php')">
                        <img src="./imagenes/María Victoria Zupan.png" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">María Vicuña Zupan</h5>
                            <p class="card-text">Secretaria</p>
                            <a href="detalle_colaborador_1.php" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Juan Domínguez</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Diego Joel Rodriguez.png" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Diego Joel Rodriguez</h5>
                            <p class="card-text">Coordinador de carrera</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Andrea Faseli.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Andrea Faseli</h5>
                            <p class="card-text">Profesora</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Gustavo Osano Aquino.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Gustavo Osano Aquino</h5>
                            <p class="card-text">Profesor</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Christian Ezequiel Vodopivec.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Christian Ezequiel Vodopivec</h5>
                            <p class="card-text">Profesor</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Silvia Mirta Marquez.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Silvia Mirta Marquez</h5>
                            <p class="card-text">Profesora</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Laura Evangelina González.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Laura Evangelina González</h5>
                            <p class="card-text">Profesora</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Hernan Miracolo.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Hernan Miracolo</h5>
                            <p class="card-text">Profesor</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Miriam Arias.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Miriam Arias</h5>
                            <p class="card-text">Profesora</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Karina Androvich.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Karina Androvich</h5>
                            <p class="card-text">Profesora</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Jorge Guzman.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Jorge Guzman</h5>
                            <p class="card-text">Profesor</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('detalle_colaborador.php')">
                        <img src="./imagenes/Ignacio Cercone.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Ignacio Cercone</h5>
                            <p class="card-text">Profesor</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
    </section>
    
    <section class="banner" style="background-image: url('./imagenes/egresados_psico_social.jpeg');">
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

    <script>
        function abrirDetalle(url) {
            window.open(url, '_blank'); // Abrir la página de detalles en una nueva pestaña
        }

     </script>
</body>
</html>