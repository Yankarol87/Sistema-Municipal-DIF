<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIF Tehuacán - Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="main-header">
        <div class="container header-content">
            <a href="index.php">
                <img src="img/Imagen1.png" alt="Logo DIF Tehuacán" class="logo-dif">
            </a>
            <div class="header-divider"></div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container">
            <ul>
                <li><a href="index.php" class="active">Inicio</a></li>
                <li><a href="servicios_dif.php">Servicios DIF</a></li>
                <li><a href="faq.php">Preguntas Frecuentes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content container">
        <section class="instituciones-section">
            <h2>Nuestras Instituciones y Servicios</h2>
            <p>DIF Tehuacán está comprometido en proporcionar soluciones eficientes de gran impacto que beneficien a la población más vulnerable y contribuyan al mejor desarrollo de las familias del municipio. Trabaja a través de diversas instituciones para ofrecer una amplia gama de apoyos y servicios a la comunidad. Haz clic en cada una para conocer sus requisitos y los programas que ofrecen.</p>
            <div class="instituciones-links">
                <a href="institucion_detalles.php?id=sipinna" class="btn-institucion">
                    <h3>SIPINNA</h3>
                    <p>Sistema de Protección Integral de los Derechos de Niñas, Niños y Adolescentes</p>
                </a>
                <a href="institucion_detalles.php?id=cecace" class="btn-institucion">
                    <h3>CECADE</h3>
                    <p>Centro de Capacitación y Desarrollo</p>
                </a>
                <a href="institucion_detalles.php?id=crit" class="btn-institucion">
                    <h3>CRIT</h3>
                    <p>Centro de Rehabilitación Integral de Tehuacán</p>
                </a>
                <a href="institucion_detalles.php?id=taid" class="btn-institucion">
                    <h3>TAID</h3>
                    <p>Talleres de Artes e Idiomas</p>
                </a>
                <a href="institucion_detalles.php?id=dif-creat" class="btn-institucion">
                    <h3>CREAT</h3>
                    <p>Centro Regional de Atención a las Adicciones de Tehuacán</p>
                </a>
                <a href="institucion_detalles.php?id=codefi" class="btn-institucion">
                    <h3>CODEFI</h3>
                    <p>Coordinación de Desarrollo Familiar Integral</p>
                </a>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Sistema Municipal DIF Tehuacán. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>