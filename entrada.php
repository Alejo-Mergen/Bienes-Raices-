

<?php
 require 'includes/functiones.php';
    
 incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.webp" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="image de la Propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-prodiedad">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptate consequuntur, veniam quod architecto atque ad nihil officia magnam commodi cupiditate et. Molestiae tempora maxime optio debitis modi natus praesentium.</p>
        </div>
    </main>

<?php

incluirTemplate('footer');

?>