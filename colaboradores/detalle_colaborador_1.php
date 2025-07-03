<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admiciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public_html/styles.css">
    <link rel="stylesheet" href="/public_html/colaborador.css">
    <link rel="icon" type="image/png" href="/public_html/imagenes/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Reutilizar el encabezado -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/nav.php'; ?>

    <div style="height: 150px"></div>
    <div class="contenedor-detalle">
        <div class="imagen-colaborador">
            <img src="/public_html/imagenes/pexels-colaborador-1.jpg" alt="Colaborador">
        </div>
        <div class="contenido-colaborador">
            <h2>Creative Approach</h2>
            <div class="seccion">
                <div class="titulo">
                    <span>Story & Concept</span>
                    <button class="toggle-btn">+</button>
                </div>
                <p class="descripcion">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring...</p>
            </div>
            <div class="seccion">
                <div class="titulo">
                    <span>Design & Development</span>
                    <button class="toggle-btn">+</button>
                </div>
                <p class="descripcion">Detailed description about the design and development aspects...</p>
            </div>
            <div class="seccion">
                <div class="titulo">
                    <span>Testing & Support</span>
                    <button class="toggle-btn">+</button>
                </div>
                <p class="descripcion">Testing procedures and support details...</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButtons = document.querySelectorAll(".toggle-btn");

            toggleButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const descripcion = this.parentElement.nextElementSibling;
                    if (descripcion.style.display === "block") {
                        descripcion.style.display = "none";
                        this.textContent = "+";
                    } else {
                        descripcion.style.display = "block";
                        this.textContent = "-";
                    }
                });
            });
        });

    </script>
    <!-- Reutilizar el pie de página -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/footer.php'; ?>
</body>
</html>
