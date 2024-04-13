<?php
    require 'includes/app.php';
    incluirTemplate('header')
?>
    <main class="contenedor contenedor-main">
        <p class="presentacion">
            Soy <b style="color: blue;">Alexander Oshita</b>, estudiante de octavo ciclo de ingeniería de Sistemas de Información en la Universidad Peruana de Ciencias Aplicadas (UPC).Tengo las habilidades para trabajar en 
            equipo, pensamiento crítico, determinante, comunicación asertiva y ser responsable. Me enfoco en aprender 
            constantemente y en contribuir al crecimiento de la organización, especialmente en áreas 
            como desarrollo de aplicaciones web, administración de datos y ciberseguridad, aunque 
            estoy abierto a explorar otras áreas de la tecnología de la información. 
        </p>
        <div class="contenedor-preproyecto">
            <h3>Una visión previa de mis proyectos</h3>
            <p class="enlace">Para una perspectiva más amplia de mi labor, te animo a explorar mi <a href="/portafolio.php"><b>Portafolio</b></a></p>
            <div class="pre-proyecto">
                <ul>
                    <li>
                        <h4 class="descripcion">FRONTEND</h4>
                        <hr>
                        <h4 class="descripcion">LANDING PAGE HUAYCO SOS</h4>
                        <a href="https://noboruoshita.github.io/HuaycoSoS-LP/Public/Index.html">
                            <img src="/img/lphuaycosos.jpg" alt="lphuayco SOS">
                        </a>
                    </li>
                    <li>
                        <h4 class="descripcion">FRONTEND | BACKEND</h4>
                        <hr>
                        <h4 class="descripcion">CREDITO VEHICULAR</h4>
                        <a href="https://noboruoshita.github.io/creditovehicular-web/public/index.html">
                            <img src="/img/creditovehicular.jpg" alt="Credito Vehicular">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
<?php
    incluirTemplate('footer');
?>