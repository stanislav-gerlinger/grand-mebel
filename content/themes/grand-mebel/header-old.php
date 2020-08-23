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
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<div class="logo">
								<a href="<?php bloginfo('url'); ?>">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" style="width:30px;">
								</a>
							</div>
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
					</nav>
				</div>
			</div>
		</div>
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

            /*let i = 0;
            let pb = $(".progress-bar");
            let timerID = setInterval(() => {
                i++;
                if(i>=100) {
                    clearInterval(timerID);
                }
                pb.css({width:i+"%"})
                console.log(i);
            }, 100)*/

        </script>