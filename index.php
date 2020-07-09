
<?php get_header();  ?>


<div class="containier-fluid">
          <?php 
           if(in_category('bio')):
          $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' );
           $destacada = $destacada[0];
          ?>
          
        <div id="portada" class="row front-cover" style="background-image:url(<?php echo $destacada ?>)">
          <?php
            endif;
          ?>  
            <div class="col-md-6 front-cover-container">            
                    <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                        
                        if(in_category( 'bio' )):    
                            the_title('<h1>','</h1>');
                           ?>
                            <article class="front-cover-description">
                            <?php
                            the_content();
                           ?>
                            </article>
                            <?php
                        endif;
                        endwhile; 
                    endif; 
                    ?>
            </div>
            <div class="col-md-12 front-cover-social-networks">
                <ul>
                    <li><a  class="networks" href="https://www.facebook.com/Yamilemakeup/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.svg" alt=""> <p>facebook.com/yamilemakeup</p></a></li>
                    <li><a class="networks" href="https://www.instagram.com/yamilemakeup/?igshid=elzox8dm8nf4" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.svg" alt=""><p>@yamilemakeup</p> </a></li>
                    <li><a class="networks" href="https://www.youtube.com/channel/UCk0pDqKt8hNJmb0Rpa8r_6g" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.svg" alt=""><p>Yamile Makeup</p> </a></li>
                </ul>
            </div>
        </div>
    
    </div>


    <section id="biografia" class="biography">
        <div class="biography-detail">
            <h1>TRAYECTORIA MAKEUPARTIST</h1>
            <article>
                <p>Venezolana, naci&oacute; el 26 junio de 1981 en San Felix, Edo Bolivar</p>
                <p>Desde muy joven estuvo en Modelaje, particip&oacute; en concursos de Bellezas, ganadora <br> de Mara de Oro y Cacique de Oro como modelo del año dek Estado Bolivar</p>
                <p>Se caso a los 20 años con el Dr Alejandro Teran, tuvo 2 Hijos Alejandro y Carlota</p>
                <p>Siempre amante del maquillaje y la belleza Yamileth decide incursionar <br> profesionalmente en el mundo del paquilaje a los 32 años, inicia su preparaci&oacute;n en diferentes cursos maquillaje con Artistas como Franklin Salomon con quien realiz&oacute; dos adiestramientos, y asi comez&oacute; sus pasos  por el mundo del maquillaje y para alcanzar un nivel superior realiz&oacute; un Proworkshop con la Makeup Artist Amanda Salazar La Musu, con quien termin&oacute; de pulir sus t&eacute;nicas y quedando como una de las alumnas m&aacute;s destacadas del Proworkshop y seleccionada para formar parte del Musuteam (grupo de profesionales del maquillaje entrenados por La Musu y desplegados en diferentes pa&iacute;ses) </p>
                <p>Actualmente reside en los Estados Unidos en la ciudad de Katy en Houston Texas. Donde es reconocida como una de mas maquiladoras m&aacute;s destacadas de la ciudad.</p>
                <p>#NoMasCarasLavadas</p>
                <a class="link" href="">ver portafolio</a>
            </article>
        </div>
        <div class="biography-images-container">
            <div class="miss-image">
                <img src="image/regina_peredo.png" alt="">
                <p>Regina peredo - <br><span>Miss Panamericana</span></p>
            </div>
            <div class="ceo-image">
                <img src="image/daniela_kosan.png" alt="">
                <p>Daniela Kos&aacute;n - <br><span>CEO y Emprendedora.</span></p>
            </div>
            <div class="actress-image">
                <img src="image/ana_simpson.png" alt="">
                <p>Ana Maria Simpson - <br> <span>Actriz y Productora</span></p>
            </div>
            <hr class="biography-line">
        </div>
    </section>
    <section id="cursos" class="course">
        <div class="title-special">
            <hr class="line-course l-left"/><h3>cursos</h3><hr class="line-course l-right"/> 
        </div>
        <div class="course__container">
            <div class="course__container--details">
                <div class="course__container--img">
                    <img class="img-course"  src="image/YAMILE.jpg" alt="">
                    <p>Automaquillaje Express</p>
                </div> 
                <div class="course__container--img">
                    <img class="img-course"  src="image/POST.jpg" alt="">
                    <p>Automaquillaje y <br> Estilismo</p>
                </div>
                <div class="course__container--img">
                    <img class="img-course"  src="image/POSTYAMILE.jpg" alt="">
                    <p>Automaquillaje <br> Kelly Texas</p>
                </div>
            </div>
            <div class="direction">
                <button  id="prev" class="prev" onclick="nextSlide(-1)">&#10094;</button>
                <button  id="next" class="next" onclick="nextSlide(1)">&#10095;</button>
            </div>
        </div>
    </section>
    <section id="tienda" class="store">
        <div class="title-special">
            <hr class="line-course l-left"/><h3>TIENDA</h3><hr class="line-course l-right"/>
        </div>
        <div class="detail-store">
            <div class="description-product-store" >
                <h2>Juego de Brochas Salam</h2>
                <p class="product-code">BLACK - Musu Cosmetic -3305/052</p>
                <div></div>
                <p class="special-p">Salam es el saludo isl&aacute;mico y significa paz.</p>
                <p>Las brochas del maquillador son el primer contacto que tiene el cliente con el maquillaje. Son el primer encuentro. Y esto explica por qu&eacute; son tan importantes</p>
                <p>El set de brochas "Salam" cuenta con 25 piezas indispensables tanto pra quien apenas comienza a dar sus primeros pasos como para los m&aacute;s experimentados. <a href="">Leer M&aacute;s</a></p>
                <a class="link" href="">comprar</a>
            </div>
            <div class="store-img">
                <div class="select-products-store">
                    <img src="image/Salam brush set.png" alt="">
                    <img src="image/musucosmeticsdelineadorlnavaja.jpg" alt="">
                    <img src="image/musu cosmetics pomadas cejaseyebrows.jpg" alt="">
                </div>
                <div class="product-store">
                    <img src="image/Salam brush set.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="contacto" class="contact">
        <div class="title-contact">
            <h2>S&iacute;gueme en Instagram <br> y conoce m&aacute;s sobre mi</h2>
            <div></div>
        </div>
        <div class="images-contact">
            <img src="image/Intersección 5.png" alt="">
            <img src="image/Intersección 6.png" alt="">
            <img src="image/Intersección 7.png" alt="">
        </div>
    </section>
    <div class="button-scroll">
        <button onclick="scrollFunction()" > <img src="image/Arrow-Circle-Left-Normal.png" alt=""></button>
    </div>
    
    <?php get_footer() ?>