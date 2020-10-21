<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
?>
	</main>
    <footer>
        <hr>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    <div>
                        <a href="http://grandmebel.loc/">
                            <img title="Логотип"
                                 src="https://sun9-12.userapi.com/impf/WALXT_rd_SGZVBiKZGDKuMmp45p48PXmCXVxpg/xSkvXvkpXJw.jpg?size=105x69&quality=90&proxy=1&sign=8d16c2763311dacf23fa8e03ad0685c1"
                            >
                        </a>
                    </div>
                    <hr>
                    <div class="metka">
                        <a href="http://grandmebel.loc/">
                            <img src="https://sun9-50.userapi.com/impf/rnZ5qiv6nlhizVxPwxUO8sdt3CDfJulDFRlqaA/dZ3kQsIminM.jpg?size=24x27&quality=90&proxy=1&sign=3b4dff3db2c9fec94cee09981ed9f624">
                        </a>
                    </div>
                    <div class="adress">
                        г. Ульяновск, ул. Ленина, д.7, строение 1
                    </div>
                </div>
                <div class="col-sm-2">
                    <h5>Меню</h5>
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
                    <h5>Товары</h5>
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
                <div class="col-sm-2">

                </div>
                <div class="col-sm-3">
                    <div class="feedback">
                        <a href="call">
                            <img src="https://sun9-57.userapi.com/impf/VJi_j2S2C4hUtD5GQPDcB53tRjd4pHaRThgqKA/z8HJqsA7-CU.jpg?size=30x30&quality=90&proxy=1&sign=d8d9c0dcfff10b5d5972422ad52f29bf">
                        </a>
                        <h5>
                            <span>+7 (8422) 33-33-33</span>
                        </h5>
                    </div>
                    <hr>
                    <div class="media">
                        <a href="https://vk.com/">
                            <img src="https://sun9-15.userapi.com/impf/QvepP2_xJrZJqTfcGg1RFK0_66xGldryaJY-xA/RlO-WlUVteo.jpg?size=70x70&quality=90&proxy=1&sign=31316c3e73372553ae27f533920799af">
                        </a>
                        <a href="https://instagram.com/">
                            <img src="https://sun9-2.userapi.com/impf/oP1kyeaFpgR8MJRAee_xlWNeN7IHv-ThgJcn5A/XNYw_eegDPY.jpg?size=71x70&quality=90&proxy=1&sign=b1b8b8025aaa1735dbabf8bbd7da8765">
                        </a>
                        <a href="https://facebook.com/">
                            <img src="https://sun9-15.userapi.com/impf/QvepP2_xJrZJqTfcGg1RFK0_66xGldryaJY-xA/RlO-WlUVteo.jpg?size=70x70&quality=90&proxy=1&sign=31316c3e73372553ae27f533920799af">
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
