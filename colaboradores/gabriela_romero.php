<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Colaborador</title>
    <link rel="icon" type="image/png" href="/public_html/imagenes/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public_html/styles.css">
    <style>
        .colaborador-detalle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            max-width: 1200px;
            margin: auto;
        }
        .colaborador-info {
            flex: 1;
            text-align: left;
            margin-right: 20px;
        }
        .colaborador-info h1 {
            font-weight: bold;
            color: #1E3A8A;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .colaborador-info h2 {
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .colaborador-info p {
            font-size: 1.2rem;
            color: #333;
        }
        .colaborador-foto {
            flex: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }
        .colaborador-foto img {
            max-width: 300px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }
        .foto-overlay {
            position: absolute;
            bottom: 20px;
            right: -30px;
            width: 300px;
            height: 100px;
            background-color: #F9A826;
            z-index: -1;
        }
        .quote-banner {
            background-color: #f0f0f0;
            border-radius: 12px;
            padding: 20px;
            margin: 50px auto;
            max-width: 1000px;
            text-align: center;
            font-size: 1.5rem;
            font-style: italic;
            color: black;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php include '../public_html/nav.php'; ?>
    <div style="height: 20px;"></div>
    <section class="colaborador-detalle">
        <div class="colaborador-info">
            <h1>Rectora</h1>
            <h2>Gabriela María Romero</h2>
            <p>Doctora en Psicología Social</p>
        </div>
        <div class="colaborador-foto">
            <img src="/public_html/imagenes/Gabriela_maria_romero.png" alt="Foto de Gabriela María Romero">
            <div class="foto-overlay"></div>
        </div>
    </section>
    <section class="quote-banner">
        <p>"La educación es el arma más poderosa que puedes usar para cambiar el mundo."</p>
    </section>
    <section class="trayectoria-section">
        <h2 class="trayectoria-title">Trayectoria</h2>
        <ul class="trayectoria-list">
            <li>
                <strong>Investigación de campo en el Hospital Alejandro Posadas</strong>
            </li>
            <li>
                <strong>Profesora en Nivel Inicial</strong>
            </li>
            <li>
                <strong>Licenciada en Psicología</strong>
            </li>
            <li>
                <strong>Profesorado en Psicología Social</strong>
            </li>
            <li>
                <strong>Máster en Neuropsicología</strong>
            </li>
            <li>
                <strong>Técnica Superior en Psicología Social</strong>
            </li>
            <li>
                <strong>Técnica en Comunicación Social</strong>
            </li>
            <li>
                <strong>Técnica Superior en Aduanas</strong>
            </li>
        </ul>
    </section>
    <style>
        .trayectoria-section {
            padding: 40px;
            margin: 50px auto;
            max-width: 900px;
        }
        .trayectoria-title {
            text-align: center;
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 20px;
            visibility: hidden;
            opacity: 0;
            transform: translateY(-30px);
            transition: all 1s ease-out;
        }
        .trayectoria-list {
            list-style: none;
            padding: 0;
        }
        .trayectoria-list li {
            margin-bottom: 20px;
            text-align: left;
            visibility: hidden;
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease-out;
            z-index: 1;
        }
        .trayectoria-list strong {
            display: block;
            font-weight: bold;
            font-size: 1.25rem;
        }
        .trayectoria-list em {
            font-style: italic;
            font-size: 1rem;
            color: #555;
            margin-top: 5px;
            display: block;
        }
        .in-view {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }
        .in-view-list {
            visibility: visible !important;
            opacity: 1 !important;
            transform: translateX(0);
            z-index: 1;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const title = document.querySelector(".trayectoria-title");
            const listItems = document.querySelectorAll(".trayectoria-list li");
            const observerOptions = {
                threshold: 0.5,
            };
            const titleObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view");
                        titleObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            titleObserver.observe(title);
            const listObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view-list");
                        listObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            listItems.forEach(item => {
                listObserver.observe(item);
            });
        });
    </script>
    <?php include '../public_html/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
