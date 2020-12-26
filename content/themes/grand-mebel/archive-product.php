<?php
/**
 * Страница архивов записей (archive-product.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
get_header(); ?>
<section>
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Товары</h2>
                <hr>
            </div>
        </div>

            <div class="row">
                       <?php // получаем все термины из таксономии product_category
                        $args = array( 'hide_empty=0' );
                        $terms = get_terms('product_category', $args);

                        // собираем их и выводим
                        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                            $count = count($terms);
                            $i=0;
                            foreach ($terms as $term) {
                                ?>
                                <div class="col-md-4">
                                    <div class="categories-cart">
                                        <?php
                                        $i++;
                                        echo '<a href="' . get_term_link( $term ) . '">
                                                <img src="https://prestizh73.ru/image/cache/catalog/2019/09/162-2-400x400-370x370.jpg" alt="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">
                                                <p>
                                                    <span>' . $term->name . '</span>
                                                </p>
                                              </a>';
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }

                        } ?>
                        <?php pagination(); ?>
            </div>
		</div>
	</div>
</section>
<?php get_footer(); ?>