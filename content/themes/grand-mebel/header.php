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
<header class="d-none d-lg-block">
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
                        <div class="logo__image">
                            <a href="<?= home_url() ?>" class="">
                                <img title="Логотип"
                                 src="<?= get_template_directory_uri() ?>/assets/images/shop_logo.svg">
                            </a>
                        </div>
                        <div class="logo__shop-title">
                            <span>ТБ</span> Гранд
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2">
                    <div class="header-media">
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
                    <div class="header-feedback">
                      <div class="row">
                        <div class="col-md-12 col-xl-2">
                          <a href="call-icon">
                              <img src="https://sun9-57.userapi.com/impf/VJi_j2S2C4hUtD5GQPDcB53tRjd4pHaRThgqKA/z8HJqsA7-CU.jpg?size=30x30&quality=90&proxy=1&sign=d8d9c0dcfff10b5d5972422ad52f29bf">
                          </a>
                        </div>
                        <div class="col-md-12 col-xl-10 phone-number-span">
                          <span class="phone-number">+7 (8422) 33-33-33</span>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
