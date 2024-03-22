<?php
 
 require 'includes/functiones.php';
    
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.webp" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="image de la Propiedad">
        </picture>

        <div class="resumen-prodiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptate consequuntur, veniam quod architecto atque ad nihil officia magnam commodi cupiditate et. Molestiae tempora maxime optio debitis modi natus praesentium.</p>
        </div>
    </main>
<?php

incluirTemplate('footer');

?>