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
    <style>
        .titulo1{
            font-size: 3rem; /* Ajusta tamaño del título */
        }


        .construction-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            height: 900px;
            .container{
                margin: 300px auto;
            }
        }

        .construction-section h2 {
            color: #002F6C;
        }

        .construction-section p {
            font-size: 1.2rem;
        }


    </style>
</head>
<body>
   
    <?php include "nav.php"; ?>

    <!-- Banner de Admisiones -->
    <section class="banner" style="background-image: url('./imagenes/edt/img_secundaria_3_edt.JPG');">
        <div class="banner-overlay">
            <h1 class="animate-text">Tramo Pedagogico</h1>
        </div>
    </section>

    <!-- Sección en Construcción -->
    <section class="construction-section py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Página en Construcción</h2>
            <p class="lead">Estamos trabajando para mejorar nuestro sitio. ¡Vuelve pronto para ver novedades!</p>
            <img src="./imagenes/construction.jpg" alt="Sitio en construcción" class="img-fluid mt-4" style="max-width: 300px;">
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