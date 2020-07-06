<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font/flaticon.css">
    <?php wp_head();  ?>
    <title>Yamile Makeup</title>
</head>
<body>
    <header class="header">
    <nav class="">
        <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
                            <img alt="<?php bloginfo("name"); ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo negro Yamile.png " width="200" class="d-inline-block align-top">
                            </a>
                    </div>
                    <div class="col-md-8">
                    
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location'  => 'principal',
                                    'container_id'    => 'navbar',
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                ) );
                            ?>
                    </div>
                </div>
        </div>

        <!-- <div class="container">
            <section class="header-logo-container">
                <div class="icons">
                     <img class="icons-img" src="image/Burger menu.svg" alt="" srcset="">
                </div>
                <figure class="logo">
                    <img src="image/logo negro Yamile.png" alt="">
                </figure>
            </section>
             <section class="header-nav-container">
                 <nav>
                     <ul>
                         <li class=""><a class="active" href="">bio</a></li>
                         <li><a href="">portafolio</a></li>
                         <li><a href="">cursos</a></li>
                         <li><a href="">tienda</a></li>
                         <li><a href="">contacto</a></li>
                     </ul>
                 </nav>
             </section>
        </div> -->
    </header>