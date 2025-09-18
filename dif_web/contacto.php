<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIF Tehuacán - Contacto</title>
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="servicios_dif.php">Servicios DIF</a></li>
                <li><a href="faq.php">Preguntas Frecuentes</a></li>
                <li><a href="contacto.php" class="active">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content container">
        <section class="contact-section">
            <h2>Información de Contacto</h2>
            <p>Aquí puedes encontrar los datos de contacto de las instituciones del Sistema Municipal DIF Tehuacán, incluyendo sus horarios y ubicaciones. Puede llamarnos o asistir a las instalaciones.</p>

            <?php
            $contact_data = [
                'Multicampo DIF' => [
                    'telefono' => '238 382 1314', // Ejemplo de número
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => 'Avenida Francisco I. Madero N.2800 Zona Alta' // Ejemplo de dirección
                ],
                'SIPINNA' => [
                    'telefono' => '238 688 4566', // El mismo número que tenías para SIPINNA
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => '5 poniente esq. Juan de la Barrera' // La misma dirección que tenías
                ],
                'CECACE' => [
                    'telefono' => '238 371 8906', // Número de ejemplo, cámbialo
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => '5 poniente esq. Juan de la Barrera' // Dirección de ejemplo, cámbiala
                ],
                'CRIT' => [
                    'telefono' => '238 392 0884', // Número de ejemplo, cámbialo
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => '5 poniente esq. Juan de la Barrera' // Dirección de ejemplo, cámbiala
                ],
                'TAID' => [
                    'telefono' => '238 488 3440', // Número de ejemplo, cámbialo
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => '14 norte esquina con 5 de mayo S/N Col Serdán' // Dirección de ejemplo, cámbiala
                ],
                'CREAT' => [
                    'telefono' => '238 688 3353', // Número de ejemplo, cámbialo
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => 'Av. Baja California s/n' // Dirección de ejemplo, cámbiala
                ],
                'CODEFI' => [
                    'telefono' => '238 380 6260', // Número de ejemplo, cámbialo
                    'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                    'direccion' => 'Cristóbal Colón #3526, Santa Maria Coapan' // Dirección de ejemplo, cámbiala
                ]
                // Puedes añadir más instituciones o áreas de contacto aquí
            ];
            ?>

            <div class="contact-info-grid">
                <?php foreach ($contact_data as $nombre_area => $datos) { ?>
                    <div class="contact-card">
                        <h3><?php echo htmlspecialchars($nombre_area); ?></h3>
                        <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($datos['telefono']); ?></p>
                        <p><strong>Horario:</strong> <?php echo htmlspecialchars($datos['horario']); ?></p>
                        <p><strong>Dirección:</strong> <?php echo htmlspecialchars($datos['direccion']); ?></p>
                    </div>
                <?php } ?>
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