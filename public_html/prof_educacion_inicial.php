<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesorado en Educación Inicial</title>
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
        max-width: 80%; /* Limita el ancho para mejor lectura */
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
    <section class="banner" style="background-image: url('./imagenes/banner_principal_inicial.jpeg');">
        <div class="banner-overlay">
            <h1 class="animate-text">Profesorado en Educación Inicial</h1>
        </div>
    </section>

    <div class="container text-center my-5" style="max-width: 60%; padding: 50px 20px;">
        <h2 class="fw-bold mb-5 titulo1">Forma parte del cambio en la educación infantil</h2>
        <p class="fs-5">
        Ser docente de educación inicial es mucho más que acompañar a los niños en sus primeros años: es formar las bases de su desarrollo, aprendizaje y derechos desde el comienzo de sus vidas. En el Profesorado de Educación Inicial del Instituto San Ambrosio, te preparamos para ser un/a educador/a reflexivo/a, innovador/a y comprometido/a con la enseñanza en la primera infancia.
        </p>
        <p class="fs-5">
        Nuestra formación te brindará herramientas pedagógicas para intervenir en diversos contextos educativos, promoviendo prácticas que garanticen el derecho a una educación integral desde los 45 días hasta los 5 años. Con un título de validez nacional y certificaciones especializadas, estarás listo/a para asumir el desafío de transformar la educación infantil.
        </p>
    </div>

    <section class="custom-banner-section">
        <div class="custom-overlay">
            <div class="custom-content">
            <h3>Educar desde el comienzo, transformar para siempre</h1>
            <p>La educación inicial es el primer eslabón en la construcción del conocimiento y el desarrollo humano. Ser docente en esta etapa es asumir un rol clave en la formación de niños y niñas, garantizando su derecho a aprender desde los primeros años de vida.
            </p>
            <br>
            <p>
            En el Profesorado de Educación Inicial del Instituto San Ambrosio, te brindamos una formación que va más allá de la enseñanza tradicional. Nuestro enfoque te prepara para crear experiencias educativas significativas, basadas en el juego, la creatividad y el respeto por la diversidad. Aquí aprenderás a diseñar estrategias innovadoras, acompañando el crecimiento de los más pequeños con compromiso y vocación.
            </p>
            </div>
        </div>
    </section>

    <section class="study-plan-section">
        <div class="container">
            <h2 class="study-plan-title">Propuesta Académica</h2>
            <div class="study-plan-box">
                <p>
                    El <strong>Profesorado de Educación Inicial</strong> del <strong>Instituto San Ambrosio</strong> te brinda una formación integral para convertirte en un docente comprometido con la enseñanza y el desarrollo de la primera infancia. Con un enfoque reflexivo e innovador, esta carrera te prepara para diseñar experiencias de aprendizaje significativas desde los 45 días hasta los 5 años.
                </p>
                <p>
                    A lo largo de la formación, adquirirás herramientas pedagógicas para la planificación de propuestas didácticas inclusivas, el uso de nuevas tecnologías aplicadas a la educación y la gestión del aula en diversos contextos. Además, realizarás <strong>prácticas profesionales</strong> que te permitirán desarrollar habilidades clave para el ejercicio docente.
                </p>
                <p>
                    Con un título de validez nacional, este profesorado te capacita para trabajar en jardines maternales e infantiles, diseñando estrategias educativas que respeten la diversidad y fomenten el crecimiento integral de cada niño y niña.
                </p>

                <ul class="study-plan-list">
                    <li><i class="fas"></i> Título con validez nacional.</li>
                    <li><i class="fas"></i> Formación en enseñanza inclusiva y educación digital.</li>
                    <li><i class="fas"></i> Prácticas profesionales en instituciones educativas.</li>
                    <li><i class="fas"></i> Plan de estudios con enfoque interdisciplinario.</li>
                    <li><i class="fas"></i> Capacitación en pedagogía, didáctica y nuevas tecnologías.</li>
                    <li><i class="fas"></i> Acompañamiento académico y desarrollo profesional.</li>
                </ul>
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
                <!-- Di Chiazza Marisa -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/di_chiazza_marisa.php', '_blank')">
                        <img src="./imagenes/Di Chiazza Marisa.jpeg" class="card-img-top collaborator-image" alt="Di Chiazza Marisa">
                        <div class="card-body">
                            <h5 class="card-title">Di Chiazza Marisa</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/gabriela_romero.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Cobo Marisa Andrea -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/cobo_marisa_andrea.php', '_blank')">
                        <img src="./imagenes/Cobo marisa Andrea.jpeg" class="card-img-top collaborator-image" alt="Cobo Marisa Andrea">
                        <div class="card-body">
                            <h5 class="card-title">Cobo Marisa Andrea</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/maria_victoria_zupan.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Robles Valeria -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/robles_valeria.php', '_blank')">
                        <img src="./imagenes/Robles Valeria.jpeg" class="card-img-top collaborator-image" alt="Robles Valeria">
                        <div class="card-body">
                            <h5 class="card-title">Robles Valeria</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/maria_jose_sgalai.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Jaras, Viviana Patricia -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/Jaras, Viviana Patricia.php', '_blank')">
                        <img src="./imagenes/Jaras, Viviana Patricia.jpeg" class="card-img-top collaborator-image" alt="Jaras, Viviana Patricia">
                        <div class="card-body">
                            <h5 class="card-title">Jaras, Viviana Patricia</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/Jaras, Viviana Patricia.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Memoli, María Milagros  -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/Memoli, María Milagros.php', '_blank')">
                        <img src="./imagenes/Memoli María Milagros.jpeg" class="card-img-top collaborator-image" alt="Memoli, María Milagros">
                        <div class="card-body">
                            <h5 class="card-title">Memoli María Milagros</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/Memoli María Milagros.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Viale, Claudio Enrique. -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/Viale, Claudio Enrique.php', '_blank')">
                        <img src="./imagenes/Viale Claudio Enrique.jpeg" class="card-img-top collaborator-image" alt="Viale, Claudio Enrique.">
                        <div class="card-body">
                            <h5 class="card-title">Viale Claudio Enrique.</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/Viale Claudio Enrique.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Ignacio Andrés Cercone. -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/Ignacio Andrés Cercone.php', '_blank')">
                        <img src="./imagenes/Ignacio Andrés Cercone.jpeg" class="card-img-top collaborator-image" alt="Ignacio Andrés Cercone">
                        <div class="card-body">
                            <h5 class="card-title">Ignacio Andrés Cercone</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/Ignacio Andrés Cercone.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
                <!-- Prof. Irma Lema -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="window.open('./colaboradores/Irma Lema.php', '_blank')">
                        <img src="./imagenes/Irma Lema.jpeg" class="card-img-top collaborator-image" alt="Irma Lema">
                        <div class="card-body">
                            <h5 class="card-title">Irma Lema</h5>
                            <p class="card-text"></p>
                            <a href="./colaboradores/Irma Lema.php" class="btn btn-link" target="_blank"><i class="bi bi-arrow-right-circle"></i> Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="banner" style="background-image: url('./imagenes/banner_inicial.jpeg');">
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