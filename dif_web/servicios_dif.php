<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIF Tehuacán - Servicios</title>
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
                <li><a href="servicios_dif.php" class="active">Servicios DIF</a></li>
                <li><a href="faq.php">Preguntas Frecuentes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content container">
        <section class="servicios-dif-section">
            <h2>Servicios Directos del DIF Tehuacán</h2>
            <p>Además de las instituciones especializadas, el Sistema Municipal DIF ofrece una serie de servicios fundamentales para el bienestar de la comunidad. Haz clic en cada uno para conocer sus requisitos y los programas que ofrecen.</p>

            <div class="servicios-grid">
                <?php
                // Función para "slugify" un string (convertirlo a un formato amigable para URL)
                function slugify($text) {
                    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
                    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                    $text = preg_replace('~[^-\w]+~', '', $text);
                    $text = trim($text, '-');
                    $text = preg_replace('~-+~', '-', $text);
                    $text = strtolower($text);
                    return empty($text) ? '' : $text;
                }

                // Array con los servicios del DIF
                $servicios = [
                    [
                        'nombre' => 'Trabajo Social',
                        'descripcion' => 'Ofrece asesoría, orientación y acompañamiento a familias y personas en situación de vulnerabilidad, gestionando apoyos y canalizando a servicios adecuados.',
                    ],
                    [
                        'nombre' => 'Psicología',
                        'descripcion' => 'Brinda apoyo psicológico a individuos y familias para el manejo de emociones, conflictos, duelos y desarrollo personal, promoviendo la salud mental.',
                        // **IMPORTANTE**: La información de teléfono y dirección ya NO se mostrará en la tarjeta resumen aquí.
                        // Solo debe ir en servicio_detalle.php
                    ],
                    [
                        'nombre' => 'Salud Bucal',
                        'descripcion' => 'Ofrece servicios de atención dental básica para promover la salud bucal en la población, especialmente en niños y adultos mayores.',
                        'detalles_en_tarjeta' => [ // Detalles específicos para mostrar DIRECTO en esta tarjeta
                            'VALORACIÓN DENTAL: $ 65.00',
                            'PROFILAXIS: $ 100.00',
                            'RESINA: $ 270.00',
                            'PULPOTOMÍA: $ 220.00',
                            'EXTRACCIÓN ADULTO: $ 150.00',
                            'EXTRACCIÓN INFANTIL: $ 120.00'
                        ],
                        'telefono_citas_en_tarjeta' => 'Agenda tu cita al 238 203 7361 / 238 382 1314.' // Información de contacto para la tarjeta
                    ],
                    [
                        'nombre' => 'Jurídico',
                        'descripcion' => 'Proporciona asesoría legal y orientación en asuntos familiares, civiles y sociales.',
                        'detalles_en_tarjeta' => [
                            'ASESORÍA JURÍDICA: $ 65.00',
                            'CONSTANCIA DE TUTORÍA: $ 110.00',
                            'CONVENIO (GUARDA, CUSTODIA, ALIMENTOS, VISITAS Y CONVIVENCIAS): $ 220.00'
                        ]
                        // **IMPORTANTE**: 'requisitos_en_tarjeta' NO va aquí para Jurídico.
                    ],
                   [
                        'nombre' => 'Dispensario Médico',
                        'descripcion' => 'Ofrece servicios de consulta médica general de primer contacto, control de enfermedades crónicas y promoción de la salud a bajo costo o gratuito.',
                        // Detalles y requisitos completos IRÁN EN servicio_detalle.php
                    ],
                    [
                        'nombre' => 'Asistencia Alimentaria',
                        'descripcion' => 'Implementa programas para garantizar el acceso a alimentos nutritivos a poblaciones vulnerables, mejorando su estado nutricional y calidad de vida.',
                    ]
                ];

                foreach ($servicios as $servicio) {
                    // Determinar si es una tarjeta de "detalles en tarjeta" o una normal con enlace
                    $is_special_card = in_array($servicio['nombre'], ['Jurídico', 'Salud Bucal']);
                    $card_tag = $is_special_card ? 'div' : 'a';
                    $card_link = $is_special_card ? '' : 'href="servicio_detalle.php?id=' . slugify($servicio['nombre']) . '"';
                    ?>
                    <<?php echo $card_tag; ?> <?php echo $card_link; ?> class="servicio-card">
                        <h3><?php echo $servicio['nombre']; ?></h3>
                        <p class="servicio-description"><?php echo $servicio['descripcion']; ?></p>

                        <?php if (isset($servicio['detalles_en_tarjeta']) && !empty($servicio['detalles_en_tarjeta'])) { ?>
                            <details>
                                <summary>Servicios y Cuotas de Recuperación</summary>
                                <ul>
                                    <?php foreach ($servicio['detalles_en_tarjeta'] as $detalle) { ?>
                                        <li><?php echo $detalle; ?></li>
                                    <?php } ?>
                                </ul>
                            </details>
                        <?php } ?>

                        <?php if (isset($servicio['telefono_citas_en_tarjeta']) && !empty($servicio['telefono_citas_en_tarjeta'])) { ?>
                            <div class="servicio-citas-info">
                                <p class="cita-label">Agenda tu cita al:</p>
                                <p class="citas-numeros">
                                    <?php
                                    $telefono_info = $servicio['telefono_citas_en_tarjeta'];
                                    // Extraer y formatear solo los números para los enlaces
                                    preg_match_all('/(238\s?\d{3}\s?\d{4})/', $telefono_info, $matches);
                                    if (!empty($matches[0])) {
                                        $num1 = str_replace(' ', '', $matches[0][0]); // Limpiar espacios para el tel: link
                                        $num2 = str_replace(' ', '', $matches[0][1]); // Limpiar espacios para el tel: link
                                        echo '<a href="tel:' . $num1 . '">' . $matches[0][0] . '</a> / <a href="tel:' . $num2 . '">' . $matches[0][1] . '</a>';
                                    } else {
                                        echo $telefono_info; // Fallback por si no encuentra los números
                                    }
                                    ?>
                                </p>
                            </div>
                        <?php } ?>

                        <?php if (!$is_special_card) { ?>
                            <span class="read-more">Ver más detalles &rarr;</span>
                        <?php } ?>
                    </<?php echo $card_tag; ?>>
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