<?php
    require 'includes/app.php';
    incluirTemplate('header');
?> 
    <div class="contenedor-portafolio">
        <h1>PORTAFOLIO</h1>
        <ul class="contenedor-portafolio__listas">

            <li class="creditovehicular">
                <h5 class="descripcion">FRONTEND | BACKEND</h5>
                <h3 class="descripcion">CREDITO VEHICULAR</h3>
                <h4>HTML, CSS, JS, FIREBASE REALTIME DATABASE, FIREBASE AUTHENTICATION</h4>
                <hr>
                <a href="/descripcion.php?url=creditovehicular">
                    <img src="/img/creditovehicular.jpg" alt="Credito Vehicular">
                </a>
            </li>

            <li class="huaycosos">
                <h5 class="descripcion">FRONTEND | BACKEND</h5>
                <h3 class="descripcion">HUAYCO SOS</a></h3>
                <h4>Angular, TypeScript, Java, PostgreSQL, JWT.
                </h4>
                <hr>
                <a href="/descripcion.php?url=huaycoSoS">
                    <img src="/img/huaycoSOS.jpg" alt=" Huayco SoS">
                </a>
            </li>

            <li class="bienesraices">
                <h5 class="descripcion">FRONTEND | BACKEND</h5>
                <h3 class="descripcion">BIENES RAICES</h3>
                <h4>PHP, JS, SCSS, MYSQL</h4>
                <hr>
                <a href="/descripcion.php?url=bienesracies">
                    <img src="/img/bienesraices.jpg" alt="Bienes Raices">
                </a>
            </li>

            <li class="festivalmusical">
                <h5 class="descripcion">FRONTEND</h5>
                <h3 class="descripcion">FESTIVAL MUSICAL</h3>
                <h4>HTML, SCSS, JS</h4>
                <hr>
                <a href="/descripcion.php?url=festivalmusical">
                    <img src="/img/festivalmusical.jpg" alt="Festival Musical">
                </a>
            </li>

            <li class="lphuaycosos">
                <h5 class="descripcion">FRONTEND</h5>
                <h3 class="descripcion">LANDING PAGE HUAYCO SOS</h3>
                <h4>HTML, CSS</h4>
                <hr>
                <a href="/descripcion.php?url=lphuaycoSoS">
                    <img src="/img/lphuaycosos.jpg" alt="proyecto1">
                </a>
            </li>
        </ul>
    </div>
<?php
    incluirTemplate('footer');
?>  