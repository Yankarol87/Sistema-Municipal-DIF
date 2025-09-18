<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIF Tehuacán - Detalle de Servicio</title>
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
        <?php
        // Función slugify() para limpiar IDs de URLs
        function slugify($text) {
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            $text = preg_replace('~[^-\w]+~', '', $text);
            $text = trim($text, '-');
            $text = preg_replace('~-+~', '-', $text);
            $text = strtolower($text);
            return empty($text) ? '' : $text;
        }

        // Array de datos de servicios detallados
        $servicios_data = [
            'trabajo-social' => [
            'titulo' => 'Trabajo Social',
            'descripcion_corta' => 'Ofrece asesoría, orientación y acompañamiento a familias y personas en situación de vulnerabilidad, gestionando apoyos y canalizando a servicios adecuados.',
            'descripcion_completa' => 'La Coordinación de Trabajo Social del DIF Tehuacán se encarga de brindar apoyo y orientación a las familias y personas que enfrentan situaciones de vulnerabilidad, promoviendo el acceso a los programas y servicios sociales de manera integral.',
            'secciones' => [
                [
                    'titulo_seccion' => 'Servicios y Cuotas de Recuperación',
                    'tipo' => 'servicios_cuotas',
                    'items' => [
                        'ESTUDIO SOCIOECONÓMICO: $ 65.00',
                        'ESTUDIO SOCIOECONÓMICO CON DICTAMEN Y/O INFORME SOCIAL: $ 100.00',
                        'ESTUDIO SOCIOECONÓMICO CON VISITA DOMICILIARIA: $ 200.00',
                        'JUICIOS ORALES: $ 150.00',
                    ]
                ],
                [
                    'titulo_seccion' => 'Aparatos Ortopédicos (Servicio Gratuito)',
                    'tipo' => 'requisitos_grupos',
                    'grupos_requisitos' => [
                        [
                            'titulo_grupo' => 'Aparatos Ortopédicos Disponibles',
                            'lista' => [
                                'Silla de ruedas para adultos',
                                'Silla de ruedas infantiles',
                                'Silla de ruedas PCA',
                                'Silla de ruedas PCI',
                                'Silla de ruedas de uso diario',
                                'Silla carriola PCI',
                                'Andadera adulto',
                                'Andadera infantil',
                                'Andadera juanito',
                                'Muletas adulto',
                                'Muletas infantiles',
                                'Muletas canadienses adulto',
                                'Muletas canadienses infantiles',
                                'Bastón de apoyo',
                                'Bastón tetrapodo',
                                'Bastón blanco',
                                'Auxiliar auditivo',
                                'Lentes',
                                'Prótesis externas- ortesis',
                            ],
                        ],
                        [
                            'titulo_grupo' => 'Requisitos para la Solicitud',
                            'lista' => [
                                'Identificación oficial vigente o constancia de identificación',
                                'Acta de nacimiento',
                                'CURP (actualizado)',
                                'Comprobante de domicilio reciente (3 meses máximo de antigüedad)',
                                'Credencial de discapacidad',
                                'Certificado médico original',
                                'Historia clínica original (6 meses máximo de antigüedad)',
                            ],
                            'anuncio' => 'El certificado o historia clínica deberá mencionar el tipo de discapacidad y el tipo de aparato ortopédico que requiere.',
                        ],
                    ],
                ],
                [
                    'titulo_seccion' => 'Requisitos para la Credencial de Discapacidad',
                    'tipo' => 'requisitos_grupos',
                    'grupos_requisitos' => [
                        [
                            'titulo_grupo' => 'Para la Persona con Discapacidad (copias)',
                            'lista' => [
                                'CURP reciente',
                                'Credencial de elector (INE) vigente',
                                'Recibo de luz',
                                'Constancia de discapacidad emitida por dispensario médico DIF',
                                'Fotografía tamaño infantil',
                            ],
                        ],
                        [
                            'titulo_grupo' => 'Para el Familiar Responsable (copias)',
                            'lista' => [
                                'CURP vigente',
                                'INE vigente',
                                'Fotografía tamaño infantil',
                            ],
                        ],
                    ],
                ],
            ],
        ],
            'psicologia' => [
                'titulo' => 'Psicología',
                'descripcion_completa' => 'Brinda apoyo psicológico a individuos y familias para el manejo de emociones, conflictos, duelos y desarrollo personal, promoviendo la salud mental.',
                'secciones' => [
                    [
                        'tipo' => 'lista_simple',
                        'titulo_seccion' => 'Servicios y Cuotas de Recuperación',
                        'items' => [
                            'CONSULTA PSICOLÓGICA 1RA sesión: $ 45.00',
                            'CONSULTA PSICOLÓGICA 2DA sesión: $ 35.00',
                            'VALORACIÓN PSICOLÓGICA: $ 65.00',
                            'CONVIVENCIAS FAMILIARES: $ 100.00',
                            'CAUSAS PENALES: $ 45.00',
                            'DILIGENCIA A NIÑOS, NIÑAS Y ADOLESCENTES: $ 200.00'
                        ],
                    ],
                    [
                        'tipo' => 'lista_simple',
                        'titulo_seccion' => 'Requisitos',
                        'items' => [
                            'Para CONSULTA PSICOLÓGICA (1ra y 2da sesión): INE',
                            'Para VALORACIÓN PSICOLÓGICA: INE, oficio enviado por autoridad jurídica (ya sea juez de lo familiar civil, penal o la fiscalía general del estado)',
                            'Para CAUSAS PENALES: INE, solicitud por parte del juez de control y medidas cautelares'
                        ],
                    ],
                ],
                'horario' => 'Previa cita.',
                'telefono' => '238 382 1314',
                'direccion' => 'Avenida Francisco I. Madero No. 2800 Fraccionamiento Zona Alta',
                'area' => 'Área de Salud Mental'
            ],
'asistencia-alimentaria' => [
    'titulo' => 'Asistencia Alimentaria',
    'descripcion_completa' => 'Implementa programas para garantizar el acceso a alimentos nutritivos a poblaciones vulnerables, mejorando su estado nutricional y calidad de vida.',
    'secciones' => [
        [
            'titulo_seccion' => 'Programas y Requisitos',
            'tipo' => 'requisitos_grupos',
            'grupos_requisitos' => [
                [
                    'titulo_grupo' => 'Programa de Apoyo Alimentario para Adultos Mayores (De 60 a 64 años)',
                    'lista' => [
                        'CURP actualizada del día del trámite o de un día anterior.',
                        'INE del beneficiario y/o tutor.',
                        'Comprobante de domicilio reciente CFE.',
                        '2 referencias personales (nombre completo, dirección y teléfono).',
                        '3 referencias domiciliarias (croquis con 3 calles que colinden con el domicilio).',
                    ],
                ],
                [
                    'titulo_grupo' => 'Programa de Apoyo Alimentario para Discapacidad (De 0 a 64 años)',
                    'lista' => [
                        'CURP actualizada del día del trámite o de un día anterior.',
                        'Constancia médica original, indicando el tipo de discapacidad.',
                        'INE del beneficiario y/o tutor.',
                        'Comprobante de domicilio reciente CFE.',
                        '2 referencias personales (nombre completo, dirección y teléfono).',
                        '3 referencias domiciliarias (croquis).',
                    ],
                ],
                [
                    'titulo_grupo' => '(PAMEL) Programa de Apoyo Alimentario para Periodo de Lactancia y/o con Hijo(a) Menores a Dos Años (Edad límite de inscripción es de 1 año)',
                    'lista' => [
                        'Documento que compruebe la existencia del menor. Esto puede ser el acta de nacimiento del menor (si es para mayores de 5 meses) o la constancia de alumbramiento (solo para menores de 5 meses).',
                        'CURP actualizada del día del trámite o de un día anterior.',
                        'CURP de la madre beneficiaria actualizada del día del trámite o de un día anterior.',
                        'Comprobante de domicilio actualizado.',
                        'Identificación oficial del tutor en caso de que el beneficiario sea menor de 18 años.',
                        '2 referencias personales (nombre completo, dirección y teléfono).',
                        '3 referencias domiciliarias (croquis).',
                    ],
                ],
                [
                    'titulo_grupo' => 'Programa de Apoyo Alimentario "INCONUT" (Menores de 2 a 2.9 años)',
                    'lista' => [
                        'CURP actualizada del día del trámite o de un día anterior.',
                        'INE del tutor.',
                        'Comprobante de domicilio reciente CFE.',
                        '2 referencias personales (nombre completo, dirección y teléfono).',
                        '3 referencias domiciliarias (croquis con 3 calles que colinden con el domicilio).',
                    ],
                ],
                [
                    'titulo_grupo' => 'Programa "1000 Días" (Dirigido a mujeres embarazadas o con hijos menores de 1 a 11 meses)',
                    'lista' => [
                        
                        'Para mujeres embarazadas: Control prenatal, copia del INE y CURP actualizado el día de la inscripción.',
                        'Para hijos de 1 a 11 meses: Copia del INE de la madre, CURP de la madre actualizado el día de inscripción, CURP del menor actualizado el día de inscripción o acta de nacimiento.',
                        'Para ambos: Copia del recibo de luz, 2 referencias con número de teléfono y dirección, y croquis del domicilio hecho a mano.',
                    ],
                ],
            ],
        ],
    ],
],  
            'dispensario-medico' => [
                'titulo' => 'Dispensario Médico',
                'descripcion_completa' => 'El servicio de Dispensario Médico del DIF Tehuacán ofrece atención médica general de primer nivel, enfocada en la prevención, diagnóstico y tratamiento de enfermedades comunes. Nos esforzamos por brindar servicios de salud accesibles y de calidad para toda la comunidad.',
                'secciones' => [
                    [
                        'tipo' => 'servicios_cuotas',
                        'titulo_seccion' => 'Servicios y Cuotas de Recuperación',
                        'items' => [
                            'APLICACIÓN DE INYECCIÓN INTRAMUSCULAR: $ 15.00',
                            'CERTIFICADO MÉDICO: $ 65.00',
                            'CONSTANCIA MÉDICA: $ 65.00',
                            'CONSULTA MÉDICA: $ 65.00',
                            'CURACIONES MENORES: $ 65.00',
                            'RETIRO DE CUERPOS EXTRAÑOS (OJO, OÍDOS, UÑAS): $ 135.00',
                            'SUTURAS (NO INCLUYE MATERIAL): $ 135.00',
                            'TOMA DE PESO Y TALLA: $ 15.00',
                            'PRUEBA DE GLUCOSA: $ 40.00',
                            'RETIRO DE PUNTOS: $ 65.00',
                            'TOMA DE PRESIÓN ARTERIAL: $ 15.00',
                            'EXAMEN PARA LA DETECCIÓN DE NÓDULOS EN MAMA: $ 150.00',
                        ],
                    ],
                    [
                        'tipo' => 'requisitos_grupos',
                        'titulo_seccion' => 'Requisitos y Notas Importantes',
                        'grupos_requisitos' => [
                            [
                                'titulo_grupo' => 'Requisitos para Certificado Médico',
                                'lista' => [
                                    'Laboratorios BH - Biometría Hemática',
                                    'Tipo de sangre',
                                    'CURP',
                                    'INE',
                                    'Comprobante de domicilio',
                                ],
                                'anuncio' => 'El certificado médico se da para deportes y escuela.',
                            ],
                            [
                                'titulo_grupo' => 'Requisitos para Certificado de Bienestar',
                                'lista' => [
                                    'Copia de acta de nacimiento',
                                    'Copia del CURP',
                                    'Copia del INE',
                                    'Copia del comprobante de domicilio',
                                    'El más importante son las copias de los resúmenes médicos, valoración por especialista, cualquier otro documento que avale la discapacidad del interesado (No importa si es viejo el resumen médico)',
                                ],
                            ],
                            [
                                'titulo_grupo' => 'Requisitos para Constancia de Discapacidad',
                                'lista' => [
                                    'Copia de acta de nacimiento',
                                    'Curp', 
                                    'INE', 
                                    'Comprobante de domicilio',
                                    'El más importante es el resumen médico avalado por un especialista donde indique el grado, el diagnóstico y tipo de discapacidad',
                                ],
                            ],
                            [
                                'titulo_grupo' => 'Requisitos para Certificado de Discapacidad',
                                'lista' => [
                                    'Presencia obligatoria del interesado',
                                    'Copia acta de nacimiento',
                                    'Copia de CURP',
                                    'Copia INE',
                                    'Copia comprobante de domicilio',
                                    'Copia de resúmenes médicos, valoración por especialista o cualquier documento que avale la discapacidad del interesado NO MAYOR A TRES MESES',
                                ],
                                'anuncio' => 'El certificado de discapacidad es un documento médico legal, es por ello que se debe respaldar con dichos documentos.',
                            ],
                        ],
                    ],
                ],
            ],
            // Asegúrate de tener los datos completos para 'salud-bucal' y 'juridico' aquí
            'salud-bucal' => [
                'titulo' => 'Salud Bucal',
                'descripcion_completa' => 'Ofrece servicios de atención dental básica para promover la salud bucal en la población, especialmente en niños y adultos mayores.',
                'secciones' => [
                    [
                        'tipo' => 'lista_simple',
                        'titulo_seccion' => 'Servicios y Cuotas de Recuperación',
                        'items' => [
                            'Consulta dental: $60.00',
                            'Limpieza dental: $120.00',
                            'Aplicación de flúor: $50.00',
                            'Extracciones simples: $150.00',
                            'Curaciones: $100.00',
                        ],
                    ],
                    [
                        'tipo' => 'lista_simple',
                        'titulo_seccion' => 'Requisitos',
                        'items' => [
                            'Identificación oficial (INE).',
                            'Comprobante de domicilio.',
                            'Menores de edad acompañados por un adulto y copia de acta de nacimiento del menor.',
                        ],
                    ],
                ],
                'horario' => 'Lunes a Viernes de 9:00 a.m. a 2:00 p.m.',
                'contacto' => 'Tel: 238 382 7361',
            ],
            'juridico' => [
                'titulo' => 'Jurídico',
                'descripcion_completa' => 'Proporciona asesoría legal y orientación en asuntos familiares, civiles y sociales.',
                'secciones' => [
                    [
                        'tipo' => 'lista_simple',
                        'titulo_seccion' => 'Servicios y Cuotas de Recuperación',
                        'items' => [
                            'ASESORÍA JURÍDICA: $ 65.00',
                            'CONSTANCIA DE TUTORÍA: $ 110.00',
                            'CONVENIO (GUARDIA, CUSTODIA, ALIMENTOS, VISITAS Y CONVIVENCIAS): $ 220.00',
                        ],
                    ],
                    [
                        'tipo' => 'lista_simple',
                        'titulo_seccion' => 'Requisitos Generales',
                        'items' => [
                            'Identificación oficial (INE).',
                            'Comprobante de domicilio.',
                            'Documentación específica del caso (ej. acta de nacimiento, matrimonio, etc.).',
                        ],
                    ],
                ],
                'horario' => 'Lunes a Viernes de 8:00 a.m. a 4:00 p.m.',
                'contacto' => '238 382 1314',
            ],
        ];

        $servicio_id_url = isset($_GET['id']) ? $_GET['id'] : '';
        $current_servicio = $servicios_data[$servicio_id_url] ?? null;

        if ($current_servicio) {
            ?>
            <section class="servicio-detalle-section">
                <a href="servicios_dif.php" class="btn-back">&larr; Volver a Servicios DIF</a>
                <h2><?php echo $current_servicio['titulo']; ?></h2>
                <p class="detalle-descripcion"><?php echo $current_servicio['descripcion_completa']; ?></p>

                <?php
                // Itera sobre las secciones definidas para este servicio y las muestra directamente
                foreach ($current_servicio['secciones'] as $seccion) {
                    ?>
                    <div class="detalle-box">
                        <h3><?php echo $seccion['titulo_seccion']; ?></h3>
                        <?php
                        if ($seccion['tipo'] === 'lista_simple' || $seccion['tipo'] === 'servicios_cuotas') {
                            ?>
                            <ul class="detalle-lista">
                                <?php foreach ($seccion['items'] as $item) { ?>
                                    <li><?php echo $item; ?></li>
                                <?php } ?>
                            </ul>
                        <?php
                        } elseif ($seccion['tipo'] === 'requisitos_grupos') {
                            ?>
                            <div class="requisitos-generales-container">
                                <?php foreach ($seccion['grupos_requisitos'] as $grupo) { ?>
                                    <div class="requisito-grupo-detalle">
                                        <p class="requisito-titulo-detalle"><?php echo $grupo['titulo_grupo']; ?></p>
                                        <ul class="requisito-lista-detalle">
                                            <?php foreach ($grupo['lista'] as $req_item) { ?>
                                                <li><?php echo $req_item; ?></li>
                                            <?php } ?>
                                        </ul>
                                        <?php if (isset($grupo['anuncio'])) { ?>
                                            <p class="requisito-anuncio-detalle"><?php echo $grupo['anuncio']; ?></p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                }

                // Manejo de información adicional (horario, contacto)
                if ($current_servicio['titulo'] === 'Psicología') { ?>
                    <div class="additional-info">
                        <p>Llamar con previa cita o para apartar una cita al número: <a href="tel:<?php echo $current_servicio['telefono']; ?>"><?php echo $current_servicio['telefono']; ?></a>.</p>
                        <p>Deberá dirigirse al MULTICAMPO DIF, ubicado en: "<?php echo $current_servicio['direccion']; ?>", en el <?php echo $current_servicio['area']; ?>.</p>
                    </div>
                <?php } else {
                    if (isset($current_servicio['horario']) && !empty($current_servicio['horario'])) { ?>
                        <div class="additional-info">
                            <p><strong>Horario de Atención:</strong> <?php echo $current_servicio['horario']; ?></p>
                        </div>
                    <?php }
                    if (isset($current_servicio['contacto']) && !empty($current_servicio['contacto'])) { ?>
                        <div class="additional-info">
                            <p><strong>Contacto:</strong> <?php echo $current_servicio['contacto']; ?></p>
                        </div>
                    <?php }
                }
                ?>

            </section>
            <?php
        } else {
            echo '<section class="error-section">';
            echo '<h2>Servicio no encontrado</h2>';
            echo '<p>Lo sentimos, la información sobre el servicio solicitado no está disponible.</p>';
            echo '<a href="servicios_dif.php" class="btn-back">Volver a Servicios DIF</a>';
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