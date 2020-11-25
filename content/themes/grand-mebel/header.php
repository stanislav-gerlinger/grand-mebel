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
    <section class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <div class="header-main-menu">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'header_main',
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
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="<?= home_url() ?>">
                            <img title="Логотип"
                                 src="https://sun9-12.userapi.com/impf/WALXT_rd_SGZVBiKZGDKuMmp45p48PXmCXVxpg/xSkvXvkpXJw.jpg?size=105x69&quality=90&proxy=1&sign=8d16c2763311dacf23fa8e03ad0685c1"
                            >
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="media">
                        <a href="https://vk.com/" class="media__circle-href">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/vk_icon.svg">
                        </a>
                        <a href="https://instagram.com/" class="media__circle-href">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/instagram_icon.svg">
                        </a>
                        <a href="https://facebook.com/" class="media__circle-href">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/facebook_icon.svg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feedback">
                        <a href="call">
                            <img src="https://sun9-57.userapi.com/impf/VJi_j2S2C4hUtD5GQPDcB53tRjd4pHaRThgqKA/z8HJqsA7-CU.jpg?size=30x30&quality=90&proxy=1&sign=d8d9c0dcfff10b5d5972422ad52f29bf">
                        </a>
                        <span>+7 (8422) 33-33-33</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
