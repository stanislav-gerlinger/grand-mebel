<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
                <a href="http://grand-mebel.loc/">
                    <img title="Логотип"
                         src="https://image.freepik.com/free-vector/creative-furniture-logo-template_23-2148466513.jpg"
                         height="100px">
                </a>
            </div>
            <div class="col-sm-5">
                <div><h2>ГРАНД</h2></div>
                <div><h5>Материалы для производства мебели</h5></div>
            </div>
            <div class="col-sm-6">
                <div class="feedback">
                    <center>
                        <div>
                            <h5>
                                <span>т. 95-11-32 / 95-11-36</span>
                            </h5>
                        </div>
                        <div>
                            <h3>
                                ЛДСП, МДФ, ФАНЕРА
                            </h3>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <section class="header-menu">
        <nav class="navbar navbar-expand-md navbar-light">
            <?php
                wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'depth' => 0,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'navbar-nav mr-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                ));
            ?>
        </nav>
    </section>
    <hr>
</header>