<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
?>
	</main>
    <footer>
		<div class="container">
			<div class="row">
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
                    <hr>
                    <div class="metka">
                        <a href="http://grandmebel.loc/">
                            <img src="https://sun9-50.userapi.com/impf/rnZ5qiv6nlhizVxPwxUO8sdt3CDfJulDFRlqaA/dZ3kQsIminM.jpg?size=24x27&quality=90&proxy=1&sign=3b4dff3db2c9fec94cee09981ed9f624">
                        </a>
                    </div>
                    <div class="adress">
                        <span>г. Ульяновск, ул. Ленина,</span>
                        <span>дом 7, строение 1</span>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <h5 class="footer-main-menu__head">Меню</h5>
                    <div class="footer-main-menu">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_main',
                                'depth' => 0,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav flex-column',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker()
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-2">
                    <h5 class="footer-products-menu__head">Товары</h5>
                    <div class="footer-products-menu">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_products',
                                'depth' => 0,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav flex-column',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker()
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-2">
                    <div class="footer-feedback">
												<div class="icon">
													<a href="call">
															<img src="https://sun9-57.userapi.com/impf/VJi_j2S2C4hUtD5GQPDcB53tRjd4pHaRThgqKA/z8HJqsA7-CU.jpg?size=30x30&quality=90&proxy=1&sign=d8d9c0dcfff10b5d5972422ad52f29bf">
													</a>
												</div>
												<div class="number">
													<h5>
															<span>+7 (8422) 33-33-33</span>
													</h5>
												</div>
											</div>
                    <hr>
										<div class="footer-media">
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
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
