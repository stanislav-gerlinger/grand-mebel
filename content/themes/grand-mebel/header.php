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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/style.css">

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
        <div class="nav-bar"> 
            Меню
            <ul>
                <li>
                    <a href="http://grand-mebel.loc">Главная</a>
                </li>
                <li>
                    <a href="http://grand-mebel.loc/products/">Товары</a>        
                </li>
                <li>
                    <a href="http://grand-mebel.loc/product-category/wood/">Дерево</a>        
                </li>
                <li>
                    <a href="http://grand-mebel.loc/product-category/metal/">Металл</a>        
                </li>
                <li>
                    <a href="http://grand-mebel.loc/about-us">О нас</a>
                </li>
            </ul>
        </div>   	
        <br>

    </div>
  </header>