<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
    <section class="banner" style="background-image: url('./imagenes/pexels-auditorio.jpg');">
        <div class="banner-overlay">
            <h1 class="animate-text">Nosotros</h1>
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
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador_1.php')">
                        <img src="./imagenes/pexels-colaborador-1.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Andrea Baccarelli</h5>
                            <p class="card-text">Principal</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Andrea Baccarelli</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador_2.php')">
                        <img src="./imagenes/pexels-colaborador-2.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Juan Domínguez</h5>
                            <p class="card-text">Vice Principal Junnior</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Juan Domínguez</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-3.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Santiago Contreras</h5>
                            <p class="card-text">PHE Head</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Santiago Contreras</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row row-container">
                <!-- Tarjeta 1 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-1.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Andrea Pabarotti</h5>
                            <p class="card-text">Principal</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Andrea Pabarotti</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-2.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Juan Diego Montes</h5>
                            <p class="card-text">Vice Principal Junnior</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Juan Diego Montes</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-3.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Jorge Diaz</h5>
                            <p class="card-text">PHE Head</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Jorge Diaz</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-container">
                <!-- Tarjeta 1 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-1.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Fernando Torres</h5>
                            <p class="card-text">Principal</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Fernando Torres</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-2.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Hector Mitre</h5>
                            <p class="card-text">Vice Principal Junnior</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Hector Mitre</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-md-4">
                    <div class="card collaborator-card" onclick="abrirDetalle('../colaboradores/detalle_colaborador.php')">
                        <img src="./imagenes/pexels-colaborador-3.jpg" class="card-img-top collaborator-image" alt="Nombre del Colaborador">
                        <div class="card-body">
                            <h5 class="card-title">Silvia Bruschinni</h5>
                            <p class="card-text">PHE Head</p>
                            <a href="#" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i> saber mas sobre Silvia Cristina Bruschinni</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <hr style="color:none">

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery para manejar el envío por Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Incluir el archivo JavaScript externo -->
    <!-- <script src="formulario.js"></script> -->
     <script>
        function abrirDetalle(url) {
            window.open(url, '_blank'); // Abrir la página de detalles en una nueva pestaña
        }

     </script>
</body>
</html>