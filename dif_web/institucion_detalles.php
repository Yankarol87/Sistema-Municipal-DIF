<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIF Tehuacán - Detalle de Institución</title>
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
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content container">
        <?php
        // Array de datos de instituciones detallados
        $instituciones_data = [
            'sipinna' => [
                'titulo' => 'SIPINNA',
                'nombre_completo' => 'Sistema de Protección Integral de los Derechos de Niñas, Niños y Adolescentes',
                'descripcion_completa' => 'SIPINNA es la instancia encargada de garantizar los derechos humanos de niñas, niños y adolescentes, coordinando acciones para su protección integral.',
                'secciones' => [
                    [
                        'titulo_seccion' => 'Servicios',
                        'items' => [
                            'Estimulación Temprana (Niños y niñas de 1 mes a los 5 años)',
                            'Psicología',
                            'Nutrición',
                            'Estomatología',
                            'Médico General',
                        ],
                    ],
                    [
                        'titulo_seccion' => 'Requisitos para solicitar apoyo',
                        'items' => [
                            'Identificación oficial del tutor o persona responsable.',
                            'Acta de nacimiento y CURP del niño, niña o adolescente.',
                            'Comprobante de domicilio.',
                            'Documentación relevante al caso (ej. reportes, denuncias, etc.).'
                        ],
                    ],
                ],
                'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                'contacto' => 'Tel: (238 688 4566)',
            ],
            'cecace' => [
                'titulo' => 'CECACE',
                'nombre_completo' => 'Centro de Capacitación y Desarrollo',
                'descripcion_completa' => 'Ofrece talleres y cursos para el desarrollo de habilidades laborales y personales, promoviendo la autonomía económica y el bienestar social.',
                'secciones' => [
                    [
                        'titulo_seccion' => 'Cursos y Talleres Disponibles',
                        'items' => [
                            'Costura y Confección',
                            'Repostería y Panadería',
                            'Belleza (corte de cabello, uñas, maquillaje)',
                            'Computación básica',
                            'Manualidades y Artesanías'
                        ],
                    ],
                    [
                        'titulo_seccion' => 'Requisitos de Inscripción',
                        'items' => [
                            'Copia de Identificación oficial (INE).',
                            'Copia de comprobante de domicilio.',
                            'Copia de CURP.',
                            'Cuota de recuperación por curso/taller (variable).'
                        ],
                    ],
                ],
                'horario' => 'Inscripciones: Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                'contacto' => 'Tel: 238 371 8906, Dirección: 5 poniente esq. Juan de la Barrera',
            ],
            'crit' => [
                'titulo' => 'CRIT',
                'nombre_completo' => 'Centro de Rehabilitación Integral de Tehuacán',
                'descripcion_completa' => 'Proporciona servicios de rehabilitación física, ocupacional y de lenguaje para personas con discapacidad, mejorando su calidad de vida e inclusión.',
                'secciones' => [
                    [
                        'titulo_seccion' => 'Servicios de Rehabilitación',
                        'items' => [
                            'Terapia Física (electroterapia, hidroterapia, termoterapia)',
                            'Terapia Ocupacional (actividades de la vida diaria, órtesis)',
                            'Terapia de Lenguaje (problemas de comunicación, deglución)',
                            'Valoración médica especializada en rehabilitación.',
                            'Orientación a familiares.'
                        ],
                    ],
                    [
                        'titulo_seccion' => 'Requisitos para ingreso',
                        'items' => [
                            'Copia de identificación oficial del paciente o tutor.',
                            'Copia de acta de nacimiento y CURP del paciente.',
                            'Comprobante de domicilio.',
                            'Diagnóstico médico actualizado y referencia (si aplica).',
                            'Estudio socioeconómico (para cuotas de recuperación).'
                        ],
                    ],
                ],
                'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m. (Citas programadas)',
                'contacto' => 'Tel: (238 392 0884)',
            ],
            'taid' => [
                'titulo' => 'TAID',
                'nombre_completo' => 'Talleres de Artes e Idiomas',
                'descripcion_completa' => 'Fomenta el desarrollo cultural y cognitivo a través de talleres de diversas disciplinas artísticas y la enseñanza de idiomas.',
                'secciones' => [
                    [
                        'titulo_seccion' => 'Oferta de Talleres',
                        'items' => [
                            'Música (guitarra, teclado, canto)',
                            'Danza (folklórica, contemporánea)',
                            'Pintura y Dibujo',
                            'Teatro',
                            'Idiomas (inglés básico)'
                        ],
                    ],
                    [
                        'titulo_seccion' => 'Requisitos de Inscripción',
                        'items' => [
                            'Copia de Identificación oficial.',
                            'Copia de CURP.',
                            'Cuota de inscripción y mensualidad.'
                        ],
                    ],
                ],
                'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m. (Horarios de talleres varían)',
                'contacto' => 'Tel: (238 488 3440)',
            ],
            'dif-creat' => [
                'titulo' => 'DIF CREAT',
                'nombre_completo' => 'Centro Regional de Atención a las Adicciones de Tehuacán',
                'descripcion_completa' => 'Brinda apoyo y orientación a personas con problemas de adicciones y a sus familias, promoviendo la rehabilitación y prevención.',
                'secciones' => [
                    [
                        'titulo_seccion' => 'Servicios Ofrecidos',
                        'items' => [
                            'Asesoría psicológica individual y familiar.',
                            'Terapias grupales de apoyo.',
                            'Talleres de prevención de adicciones.',
                            'Canalización a centros de rehabilitación especializados.',
                            'Pláticas informativas y de sensibilización.'
                        ],
                    ],
                    [
                        'titulo_seccion' => 'Requisitos para solicitar apoyo',
                        'items' => [
                            'Identificación oficial del interesado o familiar.',
                            'Comprobante de domicilio.',
                            'Disposición para participar en el programa.'
                        ],
                    ],
                ],
                'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                'contacto' => 'Tel: (238 688 3353)',
            ],
            'codefi' => [
                'titulo' => 'CODEFI',
                'nombre_completo' => 'Coordinación de Desarrollo Familiar Integral',
                'descripcion_completa' => 'Fomenta el desarrollo integral de las familias a través de programas de fortalecimiento familiar, valores y convivencia.',
                'secciones' => [
                    [
                        'titulo_seccion' => 'Programas y Actividades',
                        'items' => [
                            'Talleres de valores y comunicación familiar.',
                            'Pláticas sobre crianza positiva.',
                            'Actividades recreativas y de integración familiar.',
                            'Asesoría en desarrollo humano.'
                        ],
                    ],
                    [
                        'titulo_seccion' => 'Requisitos de Participación',
                        'items' => [
                            'Interés y compromiso de los miembros de la familia.',
                            'Inscripción en los programas específicos (si aplica).'
                        ],
                    ],
                ],
                'horario' => ' Lunes a Viernes de 8:00 a.m. a 4:00 p.m. (Consulta la programación de actividades)',
                'contacto' => 'Tel: (238 380 6260), Ubicación: Cristóbal Colón #3526, Santa Maria Coapan',
            ],
        ];

        $institucion_id_url = isset($_GET['id']) ? $_GET['id'] : '';
        $current_institucion = $instituciones_data[$institucion_id_url] ?? null;

        if ($current_institucion) {
            ?>
            <section class="institucion-detalle-section">
                <a href="index.php" class="btn-back">&larr; Volver a Inicio</a>
                <h2><?php echo $current_institucion['titulo']; ?> - <?php echo $current_institucion['nombre_completo']; ?></h2>
                <p class="detalle-descripcion"><?php echo $current_institucion['descripcion_completa']; ?></p>

                <?php
                // Aquí empieza el cambio para los acordeones
                foreach ($current_institucion['secciones'] as $seccion) {
                    ?>
                    <details class="detalle-box"> <summary><?php echo $seccion['titulo_seccion']; ?></summary> <div class="summary-content-wrapper"> <ul class="detalle-lista">
                                <?php foreach ($seccion['items'] as $item) { ?>
                                    <li><?php echo $item; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </details>
                    <?php
                }
                // Aquí termina el cambio
                ?>

                <?php
                if (isset($current_institucion['horario']) && !empty($current_institucion['horario'])) { ?>
                    <div class="additional-info">
                        <p><strong>Horario:</strong> <?php echo $current_institucion['horario']; ?></p>
                    </div>
                <?php }
                if (isset($current_institucion['contacto']) && !empty($current_institucion['contacto'])) { ?>
                    <div class="additional-info">
                        <p><strong>Contacto:</strong> <?php echo $current_institucion['contacto']; ?></p>
                    </div>
                <?php } ?>

            </section>
            <?php
        } else {
            echo '<section class="error-section">';
            echo '<h2>Institución no encontrada</h2>';
            echo '<p>Lo sentimos, la información sobre la institución solicitada no está disponible.</p>';
            echo '<a href="index.php" class="btn-back">Volver a Inicio</a>';
            echo '</section>';
        }
        ?>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Sistema Municipal DIF Tehuacán. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>