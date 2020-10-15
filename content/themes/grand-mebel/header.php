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
                        <div style="text-align: center;">
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
                        </div>
                    </div>
                </div>
            </div>
            <nav class="header__navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://grand-mebel.loc/">Главная<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://grand-mebel.loc/products/" id="navbarDropdown"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Товары
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://grand-mebel.loc/product-category/gofrokarton/">Гофрокартон</a>
                                <a class="dropdown-item" href="http://grand-mebel.loc/product-category/dvp/">ДВП
                                    (1,7*2,75)</a>
                                <a class="dropdown-item" href="http://grand-mebel.loc/product-category/dsp-16mm/">ДСП 16мм
                                    Кроностар</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://grand-mebel.loc/about-us">О нас</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>