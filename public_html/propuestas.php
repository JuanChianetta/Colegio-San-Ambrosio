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
    <style>
        /* Estilo para las cajas */
        .card-box {
            background-color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            flex: 1; /* Hace que todas las cajas tengan el mismo ancho */
            max-width: 30%; /* Tamaño máximo para cada tarjeta */
        }

        .card-box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card-box h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-box p {
            font-size: 1rem;
            color: #555;
            margin: 15px 0;
        }

        .card-box button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .card-box button:hover {
            background-color: #0056b3;
        }

        /* Flexbox para organizar las tarjetas */
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Hace que las cajas se ajusten en pantallas pequeñas */
            gap: 20px;
            margin-bottom: 50px; /* Separación del footer */
        }

        /* Overlay para fondo con efecto blur */
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            backdrop-filter: blur(0);
            transition: backdrop-filter 0.3s;
        }

        /* Contenedor del visualizador */
        #pdf-viewer-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: white;
            z-index: 1050;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.5s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        #pdf-iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 10px;
        }

        /* Botones del visualizador */
        .viewer-button {
            position: absolute;
            border: none;
            border-radius: 5px;
            padding: 10px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            background-color: #dc3545;
            transition: background-color 0.3s ease;
        }

        .viewer-button:hover {
            background-color: #b02a37;
        }

        .viewer-print {
            top: 35px;
            right: 10px;
            background-color: #007bff;
        }

        .viewer-close {
            top: 35px;
            left: 5px;
        }
    </style>
</head>

<body>
    <?php include 'nav.php'; ?>
    <!-- Banner -->
    <section class="banner" style="background-image: url('./imagenes/pexels-auditorio.jpg');">
        <div class="banner-overlay">
            <h1 class="animate-text">Carreras y Secundario</h1>
        </div>
    </section>

    <section class="welcome-section">
        <div class="container">
            <h2 class="welcome-title">Conoce más de nuestras Propuestas</h2>
        </div>
    </section>

    <!-- Contenedor de las cajas -->
    <div class="container mt-4 card-container">
        <!-- Caja Estudia Inicial -->
        <div class="card-box">
            <h2>Educación Inicial</h2>
            <p>Estudia con nosotros nuevos enfoques sobre la enseñanza de nivel inicial.</p>
            <button onclick="loadPdf('info_inicial_isa.pdf')">Ver Más</button>
        </div>

        <!-- Caja Psicología Social -->
        <div class="card-box">
            <h2>Psicología Social</h2>
            <p>Estudia con nosotros nuevos enfoques sobre la enseñanza de nivel inicial.</p>
            <button onclick="loadPdf('info_psicologia_isa.pdf')">Ver Más</button>
        </div>

        <!-- Caja Secundario -->
        <div class="card-box">
            <h2>Secundario</h2>
            <p>Estudia con nosotros nuevos enfoques sobre la enseñanza de nivel inicial.</p>
            <button onclick="loadPdf('info_secundaria_isa.pdf')">Ver Más</button>
        </div>
    </div>

    <!-- Fondo con efecto blur -->
    <div id="overlay"></div>

    <!-- Contenedor del visualizador -->
    <div id="pdf-viewer-container">
        <iframe id="pdf-iframe"></iframe>
        <button class="viewer-button viewer-print" onclick="printPdf()">Imprimir</button>
        <button class="viewer-button viewer-close" onclick="closePdfViewer()">Cerrar</button>
    </div>

    <script>
        let currentPdfUrl = '';

        function loadPdf(fileName) {
            const overlay = document.getElementById('overlay');
            const container = document.getElementById('pdf-viewer-container');
            const iframe = document.getElementById('pdf-iframe');

         iframe.src = './pdf/' + fileName;  // SIN ViewerJS
           overlay.style.display = 'block';
         setTimeout(() => overlay.style.backdropFilter = 'blur(5px)', 10);

          container.style.display = 'block';
            setTimeout(() => {
          container.style.width = '60%';
          container.style.height = '80%';
        }, 10);
        currentPdfUrl = './pdf/' + fileName;
        }
        function closePdfViewer() {
            const overlay = document.getElementById('overlay');
            const container = document.getElementById('pdf-viewer-container');
            const iframe = document.getElementById('pdf-iframe');

            // Revertir animación del contenedor
            container.style.width = '0';
            container.style.height = '0';

            // Revertir el blur del fondo
            overlay.style.backdropFilter = 'blur(0)';
            setTimeout(() => {
                container.style.display = 'none';
                overlay.style.display = 'none';
                iframe.src = ''; // Limpiar el iframe
            }, 500);
        }

        function printPdf() {
            window.open(currentPdfUrl, '_blank');
        }
    </script>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
