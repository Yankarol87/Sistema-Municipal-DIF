:root {
    --color-principal: #af968b; /* Un marrón tierra */
    --color-principal-oscuro: #beaaa1;
    --color-secundario: #c0a98e; /* Un beige claro */
    --color-fondo-claro: #dfdfd9b0; /* Un beige más claro para el fondo */
    --color-texto-oscuro: #5a5454;
    --color-gris-claro: #ccc;
    --color-azul-dif: #4682b4; /* Un tono de azul similar al logo (opcional, para otros elementos) */
}

/* Estilos Generales y Reseteo Básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* General Body and Container Styles */
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background-color: var(--color-fondo-claro); /* Asegura un fondo claro */
    color: var(--color-texto-oscuro);
    line-height: 1.6;
}

.container {
    max-width: 1200px; /* O el ancho máximo que desees para tu contenido */
    margin: 0 auto; /* ¡Importante para centrar! */
    padding: 0 20px; /* Un poco de padding a los lados */
}

/* --- Header Principal --- */
.main-header {
    background-color: var(--color-blanco);
    padding: 20px 0;
    border-bottom: 1px solid var(--color-gris-claro);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.header-content {
    display: flex; /* Activa Flexbox */
    flex-direction: column; /* <-- ¡ESTA LÍNEA ES LA CLAVE para que el logo esté arriba! */
    align-items: center;   /* Centra los elementos horizontalmente (logo y texto) */
    text-align: center;    /* Centra el texto dentro de header-text */
}

.logo-dif {
    margin-bottom: 15px; /* Espacio debajo del logo */
}

.header-text {
    flex-grow: 1; /* Permite que el texto ocupe el espacio restante */
    max-width: 500px; /* Limita el ancho del texto si la pantalla es muy ancha */
    margin-bottom: 10px; /* Pequeño margen para la adaptación responsive */
}

.header-text h1 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 2.8em;
    color: var(--color-texto-oscuro);
    margin-bottom: 5px;
}

.header-text .periodo {
    font-size: 1.2em;
    color: #666;
    margin-bottom: 5px;
}

.header-text .slogan {
    font-family: 'Great Vibes', cursive;
    font-size: 2.2em;
    color: var(--color-secundario);
    margin-top: 5px;
}

.header-divider {
    width: 2px; /* Ancho de la línea divisora */
    height: 100px; /* Altura de la línea divisora */
    background-color: var(--color-linea-divisora); /* Color de la línea */
    margin-left: 30px; /* Espacio a la izquierda de la línea */
    flex-shrink: 0; /* Evita que la línea se encoja */
}

/* Media Queries para Header Responsive */
@media (max-width: 768px) {
    .header-content {
        flex-direction: column; /* Apila elementos en pantallas pequeñas */
        align-items: center;
        text-align: center;
    }

    .logo-dif {
        margin-bottom: 0; /* Quita el margen inferior si ya no está apilado */
    }
    .header-text {
        order: 1; /* Coloca el texto primero */
        margin-bottom: 15px; /* Ajusta margen */
    }

    .logo-dif {
        order: 2; /* Coloca el logo segundo */
    }

    .header-divider {
        display: none; /* Oculta el divisor en pantallas pequeñas */
    }

    .header-text h1 {
        font-size: 2.2em;
    }

    .header-text .periodo {
        font-size: 1em;
    }

    .header-text .slogan {
        font-size: 1.8em;
    }
}


/* --- Navegación Principal --- */
.main-nav {
    background-color: var(--color-principal); /* Ahora marrón */
    padding: 15px 0;
    text-align: center;
}

.main-nav ul {
    list-style: none;
    display: flex;
    justify-content: center; /* Centra los ítems del menú */
    padding: 0;
    margin: 0;
}

.main-nav ul li {
    margin: 0 20px;
}

.main-nav ul li a {
    color: var(--color-blanco);
    text-decoration: none;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.main-nav ul li a:hover,
.main-nav ul li a.active {
    background-color: var(--color-secundario);
    color: var(--color-blanco);
}

/* --- Contenido Principal --- */
.main-content {
    padding: 40px 0;
}

/* --- Secciones Generales --- */
section {
    background-color: var(--color-blanco);
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px; /* Espacio entre secciones */
}

section h2 {
    color: var(--color-principal);
    text-align: center;
    margin-bottom: 25px;
    font-size: 2.5em;
    font-weight: 700;
}

section p {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.1em;
    line-height: 1.8;
    color: #555;
}

/* --- Estilos para servicios_dif.php --- */

.servicios-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Columnas responsivas */
    gap: 30px; /* Espacio entre las tarjetas */
    padding: 20px 0;
}

/* Estilos de la tarjeta en general */
.servicio-card {
    display: flex;
    flex-direction: column; /* Organiza los elementos en columna */
    justify-content: space-between; /* Distribuye el espacio verticalmente */
    align-items: center; /* Centra el contenido horizontalmente */
    text-align: center; /* Centra el texto */

    background-color: var(--color-blanco);
    color: var(--color-texto-oscuro);
    text-decoration: none;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid var(--color-fondo);
    min-height: 280px; /* Ajusta una altura mínima para que las tarjetas sean más uniformes */
    position: relative; /* Para posicionar el "Ver más" si fuera necesario */
}

.servicio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.servicio-card h3 {
    font-size: 1.8em;
    color: var(--color-principal);
    margin-top: 0;
    margin-bottom: 10px;
    text-align: center;
    line-height: 1.2;
    text-decoration: none;
}

.servicio-card .servicio-description {
    font-size: 0.95em;
    color: #666;
    margin-bottom: 15px;
    flex-grow: 1; /* Permite que la descripción ocupe el espacio disponible */
    text-align: justify; /* Justifica el texto para mejor lectura */
    text-decoration: none;
    line-height: 1.5; /* Mejora la legibilidad del párrafo */
}

/* El bloque .psicologia-info-resumen y sus estilos fueron ELIMINADOS de aquí,
   ya que la información de contacto de Psicología no va en la tarjeta resumen. */

/* Estilo para el enlace "Ver más" en las tarjetas de servicios_dif.php */
.servicio-card .read-more {
    display: block;
    margin-top: auto; /* Empuja el "Ver más" hacia abajo, alineándolo */
    font-weight: 600;
    color: var(--color-principal);
    text-align: center; /* Centra el texto "Ver más" */
    font-size: 0.9em;
    transition: color 0.3s ease;
    text-decoration: none;
    width: 100%; /* Para que el text-align center funcione bien */
    padding-top: 10px; /* Espacio arriba del "Ver más" */
}

.servicio-card .read-more:hover {
    color: var(--color-texto-oscuro);
    text-decoration: underline;
}

/* Estilos para las etiquetas details/summary en las tarjetas (como Jurídico) */
.servicio-card details {
    width: 100%; /* Que ocupe todo el ancho disponible */
    margin-top: 5px; /* Reducido a 5px para subirlo un poco */
    margin-bottom: 5px; /* Añadido un margen inferior para que no se pegue a lo de abajo */
    text-align: left; /* Alinea el contenido de details a la izquierda */
    font-size: 0.9em;
    color: #555;
}

.servicio-card summary {
    font-weight: 600;
    cursor: pointer;
    color: var(--color-secundario); /* Color más oscuro para el summary */
    padding: 5px 10px;
    border-radius: 4px;
    background-color: var(--color-fondo-claro); /* Fondo suave para el summary */
    transition: background-color 0.2s ease;
    text-align: center; /* Centra el texto del summary */
}
.servicio-card summary:hover {
    background-color: var(--color-gris-claro);
}

.servicio-card details ul {
    list-style-type: none; /* Quita los bullets por defecto */
    padding: 10px 0 0 0;
    margin: 0;
    text-align: left; /* Alinea los items de la lista a la izquierda */
}

.servicio-card details ul li {
    margin-bottom: 5px;
    padding-left: 10px;
    position: relative;
}

.servicio-card details ul li::before {
    content: '•'; /* Agrega un bullet personalizado */
    color: var(--color-principal); /* Color del bullet */
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

/* --- Footer Principal --- */
.main-footer {
    background-color: var(--color-texto-oscuro);
    color: var(--color-texto-claro);
    text-align: center;
    padding: 20px 0;
    margin-top: 30px;
    font-size: 0.9em;
}

/* Estilos específicos para la página de inicio (index.php) si los necesitas */
.instituciones-section {
    /* Puedes añadir estilos específicos para esta sección si es diferente a las demás */
}
.instituciones-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    padding: 20px 0;
}
.institucion-card {
    background-color: var(--color-fondo-claro);
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    text-align: center;
    transition: transform 0.3s ease;
}
.institucion-card:hover {
    transform: translateY(-3px);
}
.institucion-card h3 {
    color: var(--color-secundario);
    font-size: 1.5em;
    margin-bottom: 10px;
}
.institucion-card p {
    font-size: 0.95em;
    color: #666;
    margin-bottom: 0;
}

/* Estilos para FAQ (faq.php) */
.faq-section {
    /* Estilos adicionales si los necesitas para la sección de FAQ */
}
.faq-item {
    background-color: var(--color-fondo-claro);
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}
.faq-question {
    padding: 15px 20px;
    background-color: var(--color-gris-claro);
    font-weight: 600;
    cursor: pointer;
    border-radius: 8px 8px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--color-texto-oscuro);
    transition: background-color 0.2s ease;
}
.faq-question:hover {
    background-color: #d0d0d0;
}
.faq-answer {
    padding: 15px 20px;
    border-top: 1px solid var(--color-gris-claro);
    display: none; /* Se mostrará con JavaScript */
    color: #555;
    line-height: 1.6;
}
.faq-item.active .faq-answer {
    display: block;
    border-radius: 0 0 8px 8px;
}
.faq-arrow {
    font-size: 1.2em;
    transition: transform 0.3s ease;
}
.faq-item.active .faq-arrow {
    transform: rotate(180deg);
}

/* Estilos para Contacto (contacto.php) */
.contact-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    background-color: var(--color-fondo-claro);
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.contact-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: var(--color-texto-oscuro);
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid var(--color-gris-claro);
    border-radius: 5px;
    font-family: 'Montserrat', sans-serif;
    font-size: 1em;
    color: #333;
    background-color: var(--color-blanco);
}

.contact-form textarea {
    resize: vertical;
    min-height: 120px;
}

.contact-form button {
    display: block;
    width: 100%;
    padding: 15px;
    background-color: var(--color-principal);
    color: var(--color-blanco);
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: var(--color-secundario);
}

.contact-info {
    margin-top: 40px;
    text-align: center;
}

.contact-info p {
    font-size: 1.1em;
    margin-bottom: 10px;
    color: #555;
}

.contact-info a {
    color: var(--color-principal);
    text-decoration: none;
    font-weight: 500;
}

.contact-info a:hover {
    text-decoration: underline;
}

/* Estilos para la información de citas en tarjetas como Salud Bucal */
.servicio-card .servicio-citas-info {
    margin-top: 10px; /* Espacio entre los detalles y las citas */
    margin-bottom: 5px; /* Espacio con el borde inferior o "Ver más" */
    line-height: 1.2; /* Ligeramente más apretado para la info de citas */
    text-align: center; /* Centra todo el bloque */
    padding: 0 10px; /* Pequeño padding para que no se pegue a los bordes de la tarjeta */
    display: flex; /* Usar flexbox para alinear contenido */
    flex-direction: column; /* Apilar elementos */
    align-items: center; /* Centrar horizontalmente */
}

.servicio-card .servicio-citas-info .cita-label {
    font-size: 0.75em; /* Aún más pequeño para "Agenda tu cita al" */
    color: var(--color-secundario); /* Un color que contraste pero no sea tan fuerte como el principal */
    margin-bottom: 0px; /* Quitar el margen inferior para que los números estén pegados */
    text-transform: uppercase; /* Opcional: para darle un toque más formal */
    font-weight: 500;
}

.servicio-card .servicio-citas-info .citas-numeros {
    font-size: 1em; /* Un poco más grande para destacar los números */
    font-weight: 700; /* Más negrita para los números */
    color: var(--color-principal); /* Usar el color principal para los números */
    margin-top: 5px; /* Pequeño margen para separar de la etiqueta, pero no mucho */
}
.servicio-card .servicio-citas-info .citas-numeros a {
    color: var(--color-principal); /* Color del link de los números (tu color principal) */
    text-decoration: none;
    font-weight: inherit; /* Hereda el font-weight del padre */
}

.servicio-card .servicio-citas-info .citas-numeros a:hover {
    text-decoration: underline;
}

/* --- Estilos para servicio_detalle.php --- */

.servicio-detalle-section h2 {
    color: var(--color-principal);
    text-align: center; /* Centra el título principal */
    margin-bottom: 20px;
    font-size: 2.8em;
}

.servicio-detalle-section .detalle-descripcion {
    text-align: justify; /* Justifica la descripción principal */
    max-width: 800px; /* Limita el ancho para mejor lectura */
    margin: 0 auto 30px auto; /* Centra la descripción y da margen inferior */
    font-size: 1.1em;
    line-height: 1.8;
    color: #555;
}

.servicio-detalle-section .detalle-box {
    background-color: var(--color-fondo-claro);
    padding: 25px 35px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    margin-bottom: 25px; /* Espacio entre cajas de detalles */
    max-width: 700px; /* Ancho máximo para cada caja de contenido */
    margin-left: auto; /* Centra la caja */
    margin-right: auto; /* Centra la caja */
    text-align: center; /* Centra los títulos dentro de la caja */
}

.servicio-detalle-section .detalle-box h3 {
    color: var(--color-secundario);
    font-size: 1.8em;
    margin-bottom: 15px;
    text-align: center; /* Centra el título de la sección */
}

.servicio-detalle-section .detalle-lista {
    list-style-type: none; /* Quita los bullets por defecto */
    padding: 0;
    margin: 0;
    text-align: center; /* Centra los ítems de la lista */
}

.servicio-detalle-section .detalle-lista li {
    margin-bottom: 8px;
    font-size: 1em;
    color: var(--color-texto-oscuro);
    display: inline-block; /* Permite centrar los ítems si son cortos */
    width: 100%; /* Asegura que cada li ocupe su propia línea si es largo */
}

/* Estilos específicos para la sección de requisitos */
.requisitos-generales-container {
    padding: 10px 0;
}

.requisito-grupo-detalle {
    margin-bottom: 25px; /* Espacio entre cada grupo de requisitos */
    border-bottom: 1px dashed var(--color-gris-claro); /* Línea divisora sutil */
    padding-bottom: 15px;
}

.requisito-grupo-detalle:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.requisito-titulo-detalle {
    font-size: 1.2em; /* Título un poco más grande para requisitos */
    font-weight: 700; /* Negrita */
    color: var(--color-principal); /* Color principal para el título del requisito */
    text-align: center; /* Centrado */
    margin-bottom: 10px;
    text-transform: uppercase;
}

.requisito-lista-detalle {
    list-style-type: none;
    padding: 0;
    margin: 0;
    text-align: center; /* Centra los ítems de la lista de requisitos */
}

.requisito-lista-detalle li {
    margin-bottom: 5px;
    font-size: 0.95em;
    color: #666;
    line-height: 1.5;
    display: inline-block; /* Permite centrar y manejar como bloques */
    width: 100%;
}

.requisito-anuncio-detalle {
    font-size: 0.85em;
    color: #777;
    margin-top: 15px;
    font-style: italic;
    text-align: center;
    max-width: 600px; /* Limita el ancho del anuncio */
    margin-left: auto;
    margin-right: auto;
}

/* Media query para pantallas más pequeñas */
@media (max-width: 768px) {
    .servicio-detalle-section .detalle-box {
        padding: 20px 15px; /* Ajusta padding para móviles */
    }
    .servicio-detalle-section .detalle-box h3 {
        font-size: 1.5em;
    }
    .requisito-titulo-detalle {
        font-size: 1.1em;
    }
}

/* --- Estilos para servicio_detalle.php --- */

.servicio-detalle-section {
    max-width: 900px; /* Aumenta o ajusta el ancho máximo de la sección principal */
    margin: 30px auto; /* Centra la sección en la página y da margen */
    padding: 0 15px; /* Pequeño padding lateral */
    text-align: center; /* Centra el texto general dentro de la sección */
}

.servicio-detalle-section h2 {
    color: var(--color-principal);
    text-align: center;
    margin-bottom: 20px;
    font-size: 2.8em;
}

.servicio-detalle-section .detalle-descripcion {
    text-align: justify; /* Justifica la descripción principal */
    max-width: 800px;
    margin: 0 auto 30px auto;
    font-size: 1.1em;
    line-height: 1.8;
    color: #555;
}

/* Nuevas reglas para el contenedor de cada sección (servicios/requisitos) */
.servicio-detalle-section .detalle-box {
    background-color: var(--color-fondo-claro);
    padding: 10px 0; /* Ajustado para que el padding sea más controlado por details/summary */
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    margin-bottom: 25px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    text-align: left; /* Deja el texto alineado a la izquierda por defecto dentro del box */
}

/* Estilos para el summary (la parte visible y clicable del details) */
.servicio-detalle-section .detalle-box details {
    width: 100%;
    text-align: left; /* Por si acaso, para que el contenido de details no se centre por defecto */
}

.servicio-detalle-section .detalle-box summary {
    font-size: 1.8em; /* Tamaño del título de la sección */
    font-weight: 700; /* Negrita */
    color: var(--color-secundario); /* Color para el título de la sección */
    cursor: pointer;
    padding: 15px 25px; /* Padding para el área clicable */
    display: block; /* Para que ocupe todo el ancho y se pueda centrar su contenido */
    text-align: center; /* Centra el texto del summary */
    transition: background-color 0.2s ease;
    border-bottom: 1px solid var(--color-gris-claro); /* Separador visual */
}

.servicio-detalle-section .detalle-box summary:hover {
    background-color: rgba(0, 0, 0, 0.03); /* Ligero cambio de fondo al pasar el ratón */
}

/* Estilo para el contenido dentro del details (cuando está expandido) */
.servicio-detalle-section .summary-content-wrapper {
    padding: 20px 25px; /* Padding interno para el contenido expandido */
    text-align: center; /* Centra el contenido (listas, grupos de requisitos) */
}

/* Estilos de lista de servicios/cuotas dentro del details */
.servicio-detalle-section .detalle-lista {
    list-style-type: none; /* Quita los bullets por defecto */
    padding: 0;
    margin: 0 auto; /* Centra la lista */
    max-width: 500px; /* Opcional: limita el ancho de la lista para que no sea demasiado larga */
    text-align: left; /* Alinea los ítems a la izquierda dentro de su contenedor centrado */
}

.servicio-detalle-section .detalle-lista li {
    margin-bottom: 8px;
    font-size: 1em;
    color: var(--color-texto-oscuro);
    padding-left: 1.5em; /* Espacio para el bullet */
    position: relative;
}

.servicio-detalle-section .detalle-lista li::before {
    content: '•'; /* Bullet personalizado */
    color: var(--color-principal); /* Color del bullet */
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1.5em; /* Posiciona el bullet */
}

/* Estilos para la sección de requisitos agrupados (Dispensario Médico) */
.requisitos-generales-container {
    padding: 10px 0;
    text-align: center; /* Centra los grupos de requisitos */
    max-width: 600px; /* Limita el ancho del contenedor de requisitos */
    margin: 0 auto; /* Centra el contenedor de requisitos */
}

.requisito-grupo-detalle {
    margin-bottom: 25px;
    border-bottom: 1px dashed var(--color-gris-claro);
    padding-bottom: 15px;
}

.requisito-grupo-detalle:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.requisito-titulo-detalle {
    font-size: 1.2em;
    font-weight: 700;
    color: var(--color-secundario); /* Color secundario para el título del grupo */
    text-align: center;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.requisito-lista-detalle {
    list-style-type: none;
    padding: 0;
    margin: 0 auto; /* Centra la lista de requisitos */
    max-width: 500px; /* Limita el ancho para mejor lectura */
    text-align: left; /* Alinea los ítems a la izquierda dentro de su contenedor centrado */
}

.requisito-lista-detalle li {
    margin-bottom: 5px;
    font-size: 0.95em;
    color: #666;
    line-height: 1.5;
    padding-left: 1.5em; /* Espacio para el bullet */
    position: relative;
}

.requisito-lista-detalle li::before {
    content: '•'; /* Bullet personalizado */
    color: var(--color-principal); /* Color del bullet */
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1.5em; /* Posiciona el bullet */
}

.requisito-anuncio-detalle {
    font-size: 0.85em;
    color: #777;
    margin-top: 15px;
    font-style: italic;
    text-align: center;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* Estilos para la información adicional (horario, contacto) */
.additional-info {
    text-align: center;
    margin-top: 30px;
    padding: 20px;
    background-color: var(--color-fondo-claro);
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    color: #444;
}

.additional-info p {
    margin-bottom: 8px;
    font-size: 1em;
}

.additional-info strong {
    color: var(--color-texto-oscuro);
}

.additional-info a {
    color: var(--color-principal);
    text-decoration: none;
    font-weight: 500;
}

.additional-info a:hover {
    text-decoration: underline;
}

/* Media query para pantallas más pequeñas */
@media (max-width: 768px) {
    .servicio-detalle-section h2 {
        font-size: 2em;
    }
    .servicio-detalle-section .detalle-descripcion {
        font-size: 1em;
        padding: 0 10px;
    }
    .servicio-detalle-section .detalle-box summary {
        font-size: 1.2em;
        padding: 10px 15px;
    }
    .servicio-detalle-section .summary-content-wrapper {
        padding: 15px 15px;
    }
    .requisito-titulo-detalle {
        font-size: 1.1em;
    }
    .detalle-lista li, .requisito-lista-detalle li {
        font-size: 0.9em;
    }
}

/* Estilos para servicios_dif.php */

.servicios-section {
    padding: 60px 0;
    background-color: #f9f9f9;
    text-align: center; /* Centra el texto general y los elementos inline-block */
}

.servicios-section h2 {
    color: var(--color-principal);
    font-size: 2.8em;
    margin-bottom: 20px;
}

.servicios-section p {
    max-width: 800px;
    margin: 0 auto 40px auto;
    font-size: 1.1em;
    color: #555;
}

/* --- ESTO ES CLAVE PARA CENTRAR LOS CARDS --- */
.servicios-grid {
    display: flex; /* Habilita Flexbox */
    flex-wrap: wrap; /* Permite que los elementos se envuelvan a la siguiente línea */
    justify-content: center; /* ¡Centra los elementos horizontalmente! */
    gap: 30px; /* Espacio entre los cards */
    padding: 0;
    margin: 0; /* Asegura que no haya márgenes que interfieran */
    list-style: none; /* Elimina bullets si accidentalmente está como lista */
}

.servicio-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    padding: 30px;
    width: calc(33% - 40px); /* Ajusta el ancho para 3 columnas con espacio */
    min-width: 280px; /* Ancho mínimo para evitar que se hagan muy pequeños */
    text-align: center; /* Centra el contenido dentro de cada tarjeta */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex; /* Usar flexbox dentro del card para alinear contenido */
    flex-direction: column; /* Coloca el contenido en columna */
    justify-content: space-between; /* Empuja el botón "Ver más" hacia abajo */
    align-items: center; /* Centra horizontalmente el contenido del card */
}

.servicio-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
}

.servicio-card h3 {
    color: var(--color-secundario);
    font-size: 1.8em;
    margin-bottom: 15px;
}

.servicio-card p {
    color: #666;
    font-size: 1em;
    line-height: 1.6;
    margin-bottom: 25px;
    text-align: justify; /* Justifica la descripción dentro del card */
}

.servicio-card .btn-details {
    display: inline-block;
    background-color: var(--color-principal);
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    margin-top: auto; /* Empuja el botón al final de la tarjeta */
    transition: background-color 0.3s ease;
}

.servicio-card .btn-details:hover {
    background-color: var(--color-principal-oscuro);
}

/* Media Queries para responsividad */
@media (max-width: 992px) {
    .servicio-card {
        width: calc(50% - 30px); /* 2 columnas en tablets */
    }
}

@media (max-width: 600px) {
    .servicio-card {
        width: 100%; /* 1 columna en móviles */
        padding: 25px;
    }
}

/* --- Estilos para servicio_detalle.php --- */

.servicio-detalle-section {
    max-width: 900px; /* O el ancho deseado */
    margin: 30px auto; /* Centra la sección principal en la página */
    padding: 0 15px;
    text-align: center; /* Centra el texto general y los h2, p */
}

.servicio-detalle-section h2 {
    color: var(--color-principal);
    text-align: center; /* Esto ya debería estar centrado por el padre */
    margin-bottom: 20px;
    font-size: 2.8em;
}

.servicio-detalle-section .detalle-descripcion {
    text-align: justify; /* La descripción larga puede ir justificada */
    max-width: 800px;
    margin: 0 auto 30px auto; /* Centra la descripción */
    font-size: 1.1em;
    line-height: 1.8;
    color: #555;
}

/* Contenedor de cada sección (servicios/requisitos) */
.servicio-detalle-section .detalle-box {
    background-color: var(--color-fondo-claro);
    padding: 10px 0;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    margin-bottom: 25px;
    max-width: 700px; /* Limita el ancho de cada caja de detalle */
    margin-left: auto; /* Centra la caja de detalle */
    margin-right: auto; /* Centra la caja de detalle */
    text-align: left; /* Restablece la alineación de texto dentro del detalle-box */
}

/* Estilos para el summary (el título clicable) */
.servicio-detalle-section .detalle-box summary {
    font-size: 1.8em;
    font-weight: 700;
    color: var(--color-secundario);
    cursor: pointer;
    padding: 15px 25px;
    display: block; /* Importante para que text-align funcione */
    text-align: center; /* ¡Centra el texto del summary! */
    transition: background-color 0.2s ease;
    border-bottom: 1px solid var(--color-gris-claro);
}

/* Estilo para el contenido dentro del details (cuando está expandido) */
.servicio-detalle-section .summary-content-wrapper {
    padding: 20px 25px;
    text-align: center; /* Centra las listas y grupos de requisitos */
}

/* Listas de ítems (servicios, requisitos simples) */
.servicio-detalle-section .detalle-lista {
    list-style-type: none;
    padding: 0;
    margin: 0 auto; /* Centra la lista en su contenedor */
    max-width: 500px; /* Ancho máximo para la lista para mejor lectura */
    text-align: left; /* Alinea los ítems de la lista a la izquierda */
}

.servicio-detalle-section .detalle-lista li {
    margin-bottom: 8px;
    font-size: 1em;
    color: var(--color-texto-oscuro);
    padding-left: 1.5em;
    position: relative;
}

.servicio-detalle-section .detalle-lista li::before {
    content: '•';
    color: var(--color-principal);
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1.5em;
}

/* Contenedor de grupos de requisitos (Dispensario Médico) */
.requisitos-generales-container {
    padding: 10px 0;
    text-align: center; /* Centra los grupos de requisitos */
    max-width: 600px; /* Limita el ancho del contenedor */
    margin: 0 auto; /* Centra el contenedor completo de requisitos */
}

.requisito-grupo-detalle {
    margin-bottom: 25px;
    border-bottom: 1px dashed var(--color-gris-claro);
    padding-bottom: 15px;
}

.requisito-grupo-detalle:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.requisito-titulo-detalle {
    font-size: 1.2em;
    font-weight: 700;
    color: var(--color-secundario);
    text-align: center; /* Centra el título de cada grupo de requisitos */
    margin-bottom: 10px;
    text-transform: uppercase;
}

.requisito-lista-detalle {
    list-style-type: none;
    padding: 0;
    margin: 0 auto; /* Centra la lista de requisitos */
    max-width: 500px;
    text-align: left; /* Alinea los ítems de la lista a la izquierda */
}

.requisito-lista-detalle li {
    margin-bottom: 5px;
    font-size: 0.95em;
    color: #666;
    line-height: 1.5;
    padding-left: 1.5em;
    position: relative;
}

.requisito-lista-detalle li::before {
    content: '•';
    color: var(--color-principal);
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1.5em;
}

.requisito-anuncio-detalle {
    font-size: 0.85em;
    color: #777;
    margin-top: 15px;
    font-style: italic;
    text-align: center;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* Información adicional (horario, contacto) */
.additional-info {
    text-align: center;
    margin-top: 30px;
    padding: 20px;
    background-color: var(--color-fondo-claro);
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    color: #444;
}

/* NAVIGATION */
.main-nav {
    background-color: var(--color-principal); /* Ahora marrón */
    padding: 15px 0;
    text-align: center;
}

/* Tarjetas de servicio en servicios_dif.php */
.servicio-card .btn-details {
    background-color: var(--color-principal); /* Botón marrón */
}

.servicio-card .btn-details:hover {
    background-color: var(--color-principal-oscuro); /* Botón marrón oscuro al pasar el ratón */
}

.servicios-section h2 {
    color: var(--color-principal); /* Título de la sección en marrón */
}

/* Detalle del servicio */
.servicio-detalle-section h2 {
    color: var(--color-principal); /* Título del servicio en marrón */
}

.servicio-detalle-section .btn-back {
    background-color: var(--color-gris-claro); /* Botón de volver en gris claro */
    color: var(--color-texto-oscuro);
}

.servicio-detalle-section .detalle-box h3 {
    color: var(--color-secundario); /* Título de la sección de detalles en beige claro */
    border-bottom-color: var(--color-gris-claro);
}

.detalle-lista li::before,
.requisito-lista-detalle li::before {
    color: var(--color-principal); /* Viñetas de la lista en marrón */
}

.header-content {
    display: flex;
    flex-direction: column; /* Para que el logo esté encima del texto en la disposición predeterminada */
    align-items: center; /* Centra los elementos horizontalmente */
    gap: 10px; /* Espacio entre el logo y el texto */
    padding: 20px; /* Añade un poco de padding alrededor del contenido del header */
}

.logo-container {
    text-align: center; /* Asegura que el logo esté centrado */
    margin-bottom: 10px; /* Espacio entre el logo y el texto */
}

.header-divider {
    display: none; /* Opcional: puedes ocultar el divisor si la disposición vertical se ve mejor sin él */
}

@media (min-width: 768px) {
    .header-content {
        flex-direction: row; /* En pantallas grandes, ponlos en fila (lado a lado) */
        justify-content: center; /* Centra horizontalmente todo el bloque (logo + texto) */
        gap: 30px; /* Espacio entre el logo y el texto */
    }
    .logo-container {
        margin-bottom: 0;
    }
    .header-divider {
        display: block;
        width: 2px;
        height: 80px;
        background-color: var(--color-gris-claro);
        margin: 0 20px;
    }
}

/* --- Variables de Colores --- */
:root {
    --color-principal: #8A7C63; /* Dorado/Beige Oscuro - Puedes ajustar el tono */
    --color-fondo: #F7F7F7;    /* Blanco/Gris Muy Claro */
    --color-texto-oscuro: #333333; /* Gris Oscuro para títulos y texto principal */
    --color-texto-claro: #B3B3B3; /* Gris más claro para líneas o texto secundario */
}

/* --- Estilos Generales --- */
body {
    font-family: 'Montserrat', sans-serif; /* Sugerencia de fuente similar a la imagen */
    background-color: var(--color-fondo);
    color: var(--color-texto-oscuro);
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

/* --- Encabezados --- */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Montserrat', sans-serif; /* Mantener la misma fuente para coherencia */
    color: var(--color-texto-oscuro);
    margin-bottom: 0.5em;
}

h1 {
    font-size: 2.5em; /* Ajusta según sea necesario */
    font-weight: 700; /* Negrita */
}

/* Estilo para el texto "Sanando Tehuacán" - Puede requerir una fuente cursiva específica */
.slogan {
    font-family: 'Great Vibes', cursive; /* Ejemplo de fuente cursiva */
    font-size: 1.8em;
    color: var(--color-texto-oscuro);
    font-weight: normal; /* Para que no sea tan pesada si es cursiva */
}

/* --- Franja Inferior (como la de la imagen) --- */
.franja-inferior {
    background-color: var(--color-principal);
    width: 100%;
    height: 80px; /* Ajusta la altura según necesites */
    position: absolute; /* O fixed, dependiendo de dónde la quieras */
    bottom: 0;
    left: 0;
}

/* --- Contenedores y Secciones --- */
.container {
    max-width: 1200px; /* Ancho máximo del contenido */
    margin: 0 auto; /* Centrar el contenedor */
    padding: 20px;
}

section {
    padding: 40px 0;
}

/* --- Botones (Ejemplo) --- */
.btn {
    display: inline-block;
    background-color: var(--color-principal);
    color: white; /* O un gris claro para contraste */
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: darken(var(--color-principal), 10%); /* Oscurecer un poco al pasar el ratón */
}

/* --- Navegación (Ejemplo) --- */
nav {
    background-color: white; /* O el color de fondo */
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex; /* Para un menú horizontal */
    justify-content: center;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: var(--color-texto-oscuro);
    font-weight: 500;
    padding: 5px 0;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: var(--color-principal); /* Cambiar a dorado al pasar el ratón */
}

/* --- Logo (Si usas una imagen SVG, puedes estilizar con CSS, si es PNG, solo tamaño) --- */
.logo-dif {
    max-width: 250px; /* Ajusta el tamaño */
    height: auto;
}

/* ESTO ES CRÍTICO PARA QUE EL LOGO ESTÉ ARRIBA EN MÓVILES/POR DEFECTO */
.header-content {
    display: flex; /* Activa Flexbox */
    flex-direction: column; /* <-- ¡ESTA LÍNEA ES LA CLAVE para que el logo esté arriba! */
    align-items: center;   /* Centra los elementos horizontalmente (logo y texto) */
    text-align: center;    /* Centra el texto dentro de header-text */
}

/* Margen para separar el logo del texto cuando están apilados */
.logo-dif {
    margin-bottom: 15px; /* Espacio debajo del logo */
}


/* MEDIA QUERY PARA ESCRITORIO - SI QUIERES QUE EN ESCRITORIO VUELVAN A ESTAR LADO A LADO */
@media (min-width: 768px) {
    .header-content {
        flex-direction: row; /* En pantallas grandes, ponlos en fila (lado a lado) */
        justify-content: center; /* Centra horizontalmente todo el bloque (logo + texto) */
        gap: 30px; /* Espacio entre el logo y el texto */
    }

    .logo-dif {
        margin-bottom: 0; /* Quita el margen inferior si ya no está apilado */
    }
}

/* --- Nuevos estilos para los botones de institución en index.php --- */
.instituciones-links {
    display: flex;
    flex-direction: column; /* Apila los botones verticalmente por defecto (móviles) */
    align-items: center; /* Centra los botones horizontalmente */
    gap: 25px; /* Espacio entre los botones */
    margin-top: 30px;
    max-width: 900px; /* Ancho máximo para el contenedor de botones */
    margin-left: auto;
    margin-right: auto;
}

/* Estilo individual para cada botón de institución */
.btn-institucion {
    display: flex; /* Usa flexbox para el contenido interno del botón */
    flex-direction: column; /* Apila el h3 y p dentro del botón */
    align-items: center; /* Centra el texto dentro del botón */
    text-align: center;

    background-color: var(--color-principal); /* Marrón para los botones */
    color: var(--color-blanco);
    padding: 20px 30px; /* Más padding para que sean más grandes */
    border-radius: 12px; /* Bordes más redondeados */
    text-decoration: none;
    font-weight: 600;
    font-size: 1.15em;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.233); /* Sombra más pronunciada */
    width: 100%; /* Ocupa todo el ancho disponible en móvil */
    max-width: 400px; /* Limita el ancho máximo para que no se extiendan demasiado */
}

.btn-institucion:hover {
    background-color: var(--color-principal-oscuro); /* Marrón oscuro al pasar el ratón */
    transform: translateY(-5px); /* Efecto ligero de levantamiento */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.123); /* Sombra más grande al pasar el ratón */
}

.btn-institucion h3 {
    color: var(--color-blanco); /* Asegura que el título sea blanco */
    font-size: 1.8em; /* Tamaño grande para el título del botón */
    margin-bottom: 5px; /* Pequeño espacio entre título y subtítulo */
}

.btn-institucion p {
    color: rgba(255, 255, 255, 0.89); /* Subtítulo un poco más transparente */
    font-size: 1em; /* Tamaño normal para el subtítulo */
    margin-bottom: 0;
}


/* Media query para los botones de institución en desktop */
@media (min-width: 768px) {
    .instituciones-links {
        flex-direction: row; /* En desktop, ponlos en fila */
        flex-wrap: wrap; /* Permite que los botones se envuelvan si no caben en una línea */
        justify-content: center; /* Centra los botones horizontalmente */
    }

    .btn-institucion {
        flex: 1 1 calc(33% - 40px); /* Intenta poner 3 columnas con espacio entre ellas */
        max-width: calc(33% - 40px); /* Ajusta el ancho para 3 columnas */
        min-width: 280px; /* Asegura un tamaño mínimo */
    }
}

/* --- Estilos para las secciones de detalle (Acordeones) en institucion_detalles.php --- */

/* Contenedor de cada sección (servicios/requisitos) - ahora es <details> */
.institucion-detalle-section .detalle-box {
    background-color: var(--color-fondo-claro); /* Fondo claro para cada acordeón */
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 25px; /* Espacio entre cada acordeón */
    max-width: 800px; /* Limita el ancho de cada acordeón */
    margin-left: auto;
    margin-right: auto;
    overflow: hidden; /* Asegura que el contenido no se desborde */
    border: 1px solid var(--color-gris-claro); /* Borde sutil */
}

/* Estilos para el summary (el título clicable del acordeón) */
.institucion-detalle-section .detalle-box summary {
    font-size: 1.8em; /* Título grande */
    font-weight: 700;
    color: var(--color-principal); /* Color principal para el título */
    cursor: pointer;
    padding: 18px 25px; /* Más padding para el área clicable */
    display: block; /* Necesario para que el padding y text-align funcionen */
    text-align: center; /* Centra el texto del título */
    background-color: var(--color-blanco); /* Fondo del título */
    border-bottom: 1px solid var(--color-gris-claro); /* Línea divisoria */
    transition: background-color 0.3s ease; /* Transición suave al pasar el ratón */
    position: relative; /* Para el icono de flecha */
}

.institucion-detalle-section .detalle-box summary:hover {
    background-color: var(--color-gris-claro); /* Cambia el color al pasar el ratón */
}

/* Icono de flecha para el acordeón */
.institucion-detalle-section .detalle-box summary::after {
    content: '▼'; /* Flecha hacia abajo */
    position: absolute;
    right: 25px;
    font-size: 0.8em;
    transition: transform 0.3s ease;
}

.institucion-detalle-section .detalle-box[open] summary::after {
    content: '▲'; /* Flecha hacia arriba cuando está abierto */
}

/* Estilo para el contenido dentro del details (cuando está expandido) */
.institucion-detalle-section .summary-content-wrapper {
    padding: 25px; /* Padding generoso para el contenido */
    text-align: left; /* Alinea el texto a la izquierda dentro del contenido */
}

/* Listas de ítems (servicios, requisitos simples) dentro del acordeón */
.institucion-detalle-section .detalle-lista {
    list-style-type: none;
    padding: 0;
    margin: 0;
    max-width: 100%; /* Ocupa todo el ancho del content-wrapper */
    text-align: left; /* Asegura que los ítems estén alineados a la izquierda */
}

.institucion-detalle-section .detalle-lista li {
    margin-bottom: 10px; /* Más espacio entre ítems */
    font-size: 1.05em; /* Un poco más grande la fuente */
    color: var(--color-texto-oscuro);
    padding-left: 1.8em; /* Más espacio para el bullet */
    position: relative;
    line-height: 1.4; /* Mejora la legibilidad */
}

.institucion-detalle-section .detalle-lista li::before {
    content: '•';
    color: var(--color-secundario); /* Color del bullet del acordeón */
    font-weight: bold;
    display: inline-block;
    width: 1.2em; /* Ancho del bullet */
    margin-left: -1.8em; /* Ajusta la posición del bullet */
}

/* Información adicional (horario, contacto) en detalle_institucion.php */
.additional-info {
    background-color: var(--color-blanco); /* Fondo blanco para esta info */
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    padding: 20px 25px;
    margin-top: 25px;
    margin-bottom: 25px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    text-align: left; /* Alinea el texto a la izquierda */
}

.additional-info p {
    font-size: 1.05em;
    margin-bottom: 10px;
    color: var(--color-texto-oscuro);
    text-align: left; /* Asegura que el texto esté a la izquierda */
}

.additional-info p:last-child {
    margin-bottom: 0;
}

.additional-info strong {
    color: var(--color-principal-oscuro);
}

.additional-info a {
    color: var(--color-principal);
    text-decoration: none;
    font-weight: 500;
}

.additional-info a:hover {
    text-decoration: underline;
}

/* Estilos para el botón "Volver a Inicio" */
.institucion-detalle-section .btn-back {
    display: inline-block;
    background-color: var(--color-secundario); /* Usamos el color secundario para el botón de regresar */
    color: var(--color-blanco);
    padding: 12px 25px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    margin-bottom: 30px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.institucion-detalle-section .btn-back:hover {
    background-color: var(--color-principal); /* Cambia a principal al pasar el ratón */
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}


/* Estilos específicos para la página de Contacto */
.contact-section {
    padding: 40px 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    margin-top: 30px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
.contact-section h2 {
    color: #333;
    font-size: 2.2em;
    margin-bottom: 20px;
    text-align: center;
}
.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 30px;
}
.contact-card {
    background-color: #beaaa1;
    border: 1px solid #beaaa1;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.08);
    transition: transform 0.2s ease;
}
.contact-card:hover {
    transform: translateY(-5px);
}
.contact-card h3 {
    color: #5C4033; /* Un color café que contraste */
    font-size: 1.5em;
    margin-bottom: 15px;
    border-bottom: 2px solid #8d7e7e;
    padding-bottom: 10px;
}
.contact-card p {
    margin-bottom: 10px;
    color: #666;
}
.contact-card p strong {
    color: #333;
}


/* Estilos específicos para la página de Preguntas Frecuentes */
.faq-section {
    padding: 40px 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    margin-top: 30px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
.faq-section h2 {
    color: #333;
    font-size: 2.2em;
    margin-bottom: 20px;
    text-align: center;
}
.faq-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 15px;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}
.faq-question {
    padding: 15px 20px;
    background-color: #F8F8F8;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    color: #5C4033; /* Color café para las preguntas */
    transition: background-color 0.3s ease;
}
.faq-question:hover {
    background-color: #eee;
}
.faq-question .arrow {
    font-size: 1.2em;
    transition: transform 0.3s ease;
}
.faq-item.active .faq-question .arrow {
    transform: rotate(180deg);
}
.faq-answer {
    padding: 0 20px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
    color: #555;
    line-height: 1.6;
}
.faq-item.active .faq-answer {
    max-height: 200px; /* Ajusta según el contenido máximo esperado */
    padding: 15px 20px;
    transition: max-height 0.5s ease-in, padding 0.5s ease-in;
}

.logo-dif {
    max-width: 100%; /* El logo no será más grande que su contenedor */
    height: auto;
}

.logo-dif {
    max-width: 250px; /* El logo nunca será más grande de 250px */
    height: auto;
}