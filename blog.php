<?php
 require 'includes/functiones.php';
    
 incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para contrir una terraza en el techo de tu casas con los mejores materias y orando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para decoracion de tu hogar </h4>
                    <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                    <p>
                    Maximiza el espacio en tu hogar con este guia, aprende a combinar muebles y colores para darle vida a tu espacio 
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para contrir una terraza en el techo de tu casas con los mejores materias y orando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para decoracion de tu hogar </h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                    <p>
                    Maximiza el espacio en tu hogar con este guia, aprende a combinar muebles y colores para darle vida a tu espacio 
                    </p>
                </a>
            </div>
        </article>
    </main>

<?php
incluirTemplate('footer');

?>