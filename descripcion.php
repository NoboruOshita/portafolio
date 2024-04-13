<?php
    require 'includes/app.php';
    incluirTemplate('header');
    $url_recibida = $_GET['url'];
?>
    <div class="contenedor-descripcion">

        <?php if($url_recibida == "creditovehicular"): ?>
            <h1 class="titulo">CREDITO VEHICULAR</h1>
            <p class="descripcion">
                La aplicación web de crédito vehicular es una plataforma que permite calcular el préstamo vehicular financiero y muestra en una tabla el resumen financiero solicitado por el prestatario. La aplicación fue desarrollada con HTML, CSS y JavaScript (JS). La base de datos utilizada es el servicio de API llamado Firebase Realtime Database, y para garantizar la seguridad del usuario, se utilizó Firebase Authentication.
            </p>
            <a href="https://noboruoshita.github.io/creditovehicular-web/public/index.html">Visitar la PAGINA</a>
            <img src="/img/creditovehicular.jpg" alt="Credito Vehicular.jpg">
        <?php endif; ?>

        <?php if($url_recibida == "huaycoSoS"): ?>
            <h1 class="titulo">HUAYCO SOS</h1>
            <p class="descripcion">
                La aplicación web HuaycoSoS es un proyecto desarrollado como parte del curso de Arquitectura de Aplicaciones Web, empleando Angular, TypeScript, Java, PostgreSQL y JWT. Esta web facilita la interacción entre damnificados y donantes con funcionalidades como reportes, donaciones, publicación y búsqueda de casos. Su base de datos se aloja en Amazon, con el backend en Render y el frontend en Vercel, asegurando una arquitectura escalable y robusta. Aunque la carga inicial puede ser ligeramente más lenta por el uso de servicios de hosting gratuitos, proporciona una experiencia sólida y segura para los usuarios.
            </p>
            <a href="https://huaycosos.web.app/login">Visitar la PAGINA</a>
            <img src="/img/huaycoSOS.jpg" alt="Huayco SOS.jpg">
        <?php endif; ?>

        <?php if($url_recibida == "bienesracies"): ?>
            <h1 class="titulo">BIENES RAICES</h1>
            <p class="descripcion">
                Es un proyecto personal que está en proceso de desarrollo. La página web permite publicar anuncios de venta y/o alquiler de viviendas en los distritos de La Molina y San Borja. Se está desarrollando con PHP, JavaScript (JS), SCSS y utiliza MySQL como base de datos.
            </p>
            <a href="">Visitar la PAGINA</a>
            <img src="/img/bienesraices.jpg" alt="Bienes Raices.jpg">
        <?php endif; ?>
        
        <?php if($url_recibida == "festivalmusical"): ?>
            <h1 class="titulo">FESTIVAL MUSICAL</h1>
            <p class="descripcion">
                Este proyecto personal fue elaborado con el objetivo de poner en práctica todos mis conocimientos sobre HTML, CSS y JavaScript (JS), así como para explorar nuevas técnicas y desafíos en el desarrollo web.
            </p>
            <a href="https://noboruoshita.github.io/festivalmusical/">Visitar la PAGINA</a>
            <img src="/img/festivalmusical.jpg" alt="Festival Musical.jpg">
        <?php endif; ?>

        <?php if($url_recibida == "lphuaycoSoS"): ?>
            <h1 class="titulo">LANDING PAGE HUAYCO SOS</h1>
            <p class="descripcion">
                La página web es un proyecto universitario que fue desarrollada con HTML y CSS y tiene como principal objetivo la promoción de la aplicación móvil de Huayco SoS. Diseñada para brindar información clara y concisa sobre las características y beneficios de nuestra aplicación, así como para fomentar la descarga y el uso activo de la misma por parte de nuestros usuarios.
            </p>
            <a href="https://noboruoshita.github.io/HuaycoSoS-LP/Public/Index.html">Visitar la PAGINA</a>
            <img src="/img/lphuaycosos.jpg" alt="Landing Page Huayco SOS.jpg">
        <?php endif; ?>
        
    </div>
<?php
    incluirTemplate('footer');
?> 