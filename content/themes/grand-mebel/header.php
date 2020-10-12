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
            <div class="row">
                <div class="col-sm-5">
                    <div class="header-menu">
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
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="http://grandmebel.ru/">
                            <img title="Логотип"
                                 src="https://sun9-42.userapi.com/impg/IFBiKbeJ2FcxDgFvfc45Qpgn9sHxgo5z7kyw8w/ljS9pkDuZDs.jpg?size=177x91&quality=90&proxy=1&sign=4793b0def1a46b81bda1e8f4e6fd7a18"
                            >
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="media">
                        <a href="https://vk.com/">
                            <img src="https://sun9-65.userapi.com/impg/Qz2kDqISKbjf7i-7_4Ku30gs5KA3Ux_ipesLsg/uvBj8vDc1Uw.jpg?size=33x35&quality=90&proxy=1&sign=2456fa24785d3bd92e89938634b6c476">
                        </a>
                        <a href="https://instagram.com/">
                            <img src="https://sun9-72.userapi.com/impg/Wpr9Zyon-HVDgLRHw5eX90BDm_xe8qaAAsMYyw/tMAlnQyB6S0.jpg?size=35x35&quality=90&proxy=1&sign=9c10fafb505903a557333d6397b542dd">
                        </a>
                        <a href="https://facebook.com/">
                            <img src="https://sun9-39.userapi.com/impg/qS0LsBd8CIzbI1YHdPvGcdrGyI_XescslGMl7Q/Zr7gP3bghUI.jpg?size=36x34&quality=90&proxy=1&sign=737158140627c9dd4af30b6baf0e9934">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feedback">
                        <h5>
                            <span>+7 (8422) 33-33-33</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
</header>