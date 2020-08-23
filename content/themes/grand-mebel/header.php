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
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">

    </script>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div>
                    WhatsApp Telegram
                </div>
                <div>
        <span href="tel:+74959241129">
          +7 495 924 11 29
        </span>
                    <span href="tel:+79851932830">
          +7 985 193 28 30
        </span>
                </div>
            </div>

            <div class="col-sm-2">
                <a href="https://shaparbrand.ru" class="logo">
                    <img title="Логотип бренда Shapar" alt="На фотографии логотип бренда вязаной одежды Shapar"
                         src="https://shaparbrand.ru/wp-content/themes/test1/img/logo1.svg" width="133px"
                         height="100px">
                </a>
            </div>

            <div class="col-sm-3 user-info">
                <a href="https://shaparbrand.ru/wp-login.php?action=register&redirect_to=/">
                    Зарегистрироваться
                </a>
                <a href="https://shaparbrand.ru/wp-login.php?redirect_to=%2F">
                    Войти
                </a>
            </div>

            <div class="col-sm-2">
                <div class="header-c">
                    <a href="/podarochnyj-sertifikat" class="go-to-cert" title="Подарочная карта">
                        <img src="https://shaparbrand.ru/wp-content/themes/test1/img/icons/Gift.svg"
                             alt="Подарочная карта" class="go-to-cert__icon">
                    </a>
                    <a href="/izbrannoe/" class="gotofavorite" title="Избранное">
                        <img src="https://shaparbrand.ru/wp-content/themes/test1/img/icons/Like.svg" alt="Избранное"
                             class="go-to-cert__icon">
                        <span class="amount">0</span>
                    </a>
                    <a href="/profile/cart/" class="gotocart">
                        <img src="https://shaparbrand.ru/wp-content/themes/test1/img/icons/Bag.svg" alt="Корзина"
                             class="go-to-cert__icon">
                        <span class="amount">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse" id="topnav">
                <?php $args = array(
                    'theme_location' => 'top',
                    'container'=> false,
                    'menu_id' => 'top-nav-ul',
                    'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                    'menu_class' => 'top-menu',
                    'walker' => new bootstrap_menu(true)
                );
                wp_nav_menu($args);
                ?>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

</header>

<main>
    <script>
        let Product = function (data) {
            // attributes
            this.price = data.price;
            this.title = data.title;
            this.id = data.id;
            this.inCart = data.inCart;

            // methods
            this.getInfo = function () {
                return this.price + this.title + this.id;
            }
            this.addToCart = function () {
                if(this.inCart == false) {
                    cart.push(this);
                    this.inCart = true;
                } else {
                    alert("Вы уже добавили этот товар в корзину! А теперь иди купи button в Эльдорадо");
                }

            }
        };
        let products = [];
        for (let i = 0; i <= 12; i++) {
            let data = {
                price: i * 100,
                title: "product " + i,
                id: i,
                inCart: false,
            };
            let product = new Product(data);
            products.push(product);
            console.log(product.getInfo());
        }
        let cart = [];
    </script>

