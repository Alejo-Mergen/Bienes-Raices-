<?php
  require 'includes/functiones.php';
    
  incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="iamge/webp">
                    <source srcset="build/img/nosotros.jpg" type="iamge/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de esperiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, ad nisi illo unde quod enim minus nostrum delectus rerum debitis aspernatur asperiores voluptates eum quas dicta temporibus ex vel dolor? adipisicing elit. Odit, ad nisi illo unde quod enim minus nostrum delectus rerum debitis aspernatur asperiores voluptates eum quas dicta temporibus ex vel dolor?</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio dolorum dolores voluptatibus in, minima iusto delectus eligendi corporis quisquam animi dicta voluptatum iste alias omnis ex voluptates nihil ipsa?</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam repellat delectus quaerat harum adipisci, itaque officiis. Ab nobis odit, provident vero explicabo expedita placeat. Et dolorem explicabo vitae labore ad.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Precio" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam repellat delectus quaerat harum adipisci, itaque officiis. Ab nobis odit, provident vero explicabo expedita placeat. Et dolorem explicabo vitae labore ad.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Tiempo" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam repellat delectus quaerat harum adipisci, itaque officiis. Ab nobis odit, provident vero explicabo expedita placeat. Et dolorem explicabo vitae labore ad.</p>
            </div>
        </div>
    </section>

<?php

incluirTemplate('footer');

?>