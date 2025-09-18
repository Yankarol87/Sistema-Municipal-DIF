<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIF Tehuacán - Preguntas Frecuentes</title>
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
                <li><a href="faq.php" class="active">Preguntas Frecuentes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content container">
        <section class="faq-section">
            <h2>Preguntas Frecuentes</h2>
            <p>Encuentra respuestas a las preguntas más comunes sobre los servicios, programas y trámites del Sistema Municipal DIF Tehuacán.</p>

            <?php
            $faqs = [
                [
                    'question' => '¿Cuáles son los horarios de atención del DIF Tehuacán?',
                    'answer' => 'El horario de atención general del Sistema Municipal DIF Tehuacán es de Lunes a Viernes, de 8:00 a.m. a 4:00 p.m. Se recomienda verificar el horario específico de cada área o programa, ya que algunos podrían variar.'
                ],
                [
                    'question' => '¿Dónde se encuentran ubicadas las oficinas principales del DIF?',
                    'answer' => 'Las oficinas principales del DIF Tehuacán se encuentran en [Dirección de Oficinas Principales, ej. Calle 1 Norte #100, Col. Centro]. Puedes consultar la sección de Contacto para ver las direcciones de otras áreas y centros.'
                ],
                [
                    'question' => '¿Los servicios que ofrece el DIF tienen algún costo?',
                    'answer' => 'Muchos de los servicios que ofrece el DIF son totalmente gratuitos, especialmente aquellos dirigidos a la población más vulnerable. Sin embargo, algunos programas o terapias específicas pueden tener una cuota de recuperación simbólica. Te invitamos a consultar la información detallada de cada servicio o contactar directamente al área correspondiente para conocer los costos, si aplica.'
                ],
                [
                    'question' => '¿Qué documentos necesito para acceder a los servicios del DIF?',
                    'answer' => 'Los documentos varían según el servicio que solicites. Generalmente, se te pedirá identificación oficial (INE) del solicitante, comprobante de domicilio reciente y, en algunos casos, acta de nacimiento o CURP del beneficiario. Es recomendable consultar los requisitos específicos de cada programa en su sección correspondiente o llamar antes de acudir.'
                ],
                [
                    'question' => '¿Cómo puedo agendar una cita para terapia psicológica o médica?',
                    'answer' => 'Para agendar una cita en las áreas de psicología, medicina general o cualquier otra terapia, puedes comunicarte directamente al teléfono del área correspondiente que encontrarás en nuestra sección de Contacto, o acudir personalmente a las instalaciones.'
                ],
                [
                    'question' => '¿El DIF ofrece apoyo alimentario o despensas?',
                    'answer' => 'Sí, el DIF Tehuacán cuenta con programas de asistencia alimentaria dirigidos a familias y personas en situación de vulnerabilidad. Para conocer los requisitos y el proceso de inscripción, te invitamos a visitar la sección de Asistencia Alimentaria en nuestra página de Servicios DIF o contactar a la coordinación de Asistencia Social.'
                ],
                [
                    'question' => '¿Hay programas de apoyo para personas con discapacidad?',
                    'answer' => 'Absolutamente. El Centro de Rehabilitación Integral de Tehuacán (CRIT) ofrece diversos servicios de rehabilitación y terapias. Además, se gestionan apoyos y se brinda orientación sobre los derechos de las personas con discapacidad. Para más detalles, consulta la sección del CRIT en nuestras instituciones o contáctanos.'
                ],
                [
                    'question' => '¿El DIF ofrece talleres o cursos de capacitación?',
                    'answer' => 'Sí, el Centro de Capacitación y Desarrollo (CECADE) ofrece una variedad de talleres y cursos con el objetivo de fomentar el desarrollo de habilidades laborales y personales. Para conocer la oferta actual, fechas de inscripción y costos, visita la sección del CECADE.'
                ],
                // Puedes añadir más preguntas y respuestas aquí
                [
                    'question' => '¿Cómo puedo reportar un caso de maltrato o vulneración de derechos de un niño, niña o adolescente?',
                    'answer' => 'Si conoces o sospechas de un caso de maltrato, abandono o vulneración de los derechos de un menor, puedes acercarte a SIPINNA (Sistema de Protección Integral de los Derechos de Niñas, Niños y Adolescentes). Ofrecen asesoría y acompañamiento. También puedes llamar a sus números de contacto para una atención confidencial.'
                ]
            ];
            ?>

            <div class="faq-list">
                <?php foreach ($faqs as $faq) { ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <?php echo htmlspecialchars($faq['question']); ?>
                            <span class="arrow">&#9660;</span> </div>
                        <div class="faq-answer">
                            <p><?php echo htmlspecialchars($faq['answer']); ?></p>
                        </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const faqItem = question.closest('.faq-item');
                    faqItem.classList.toggle('active'); // Alterna la clase 'active'
                });
            });
        });
    </script>

</body>
</html>