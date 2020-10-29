<?php
/**
 * Шаблон страницы "О нас" (page-main.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 * Template Name: Шаблон главной страницы
 */
get_header(); ?>
    <section class="slider container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://sun9-18.userapi.com/impf/m5t13UIQbAgmYGCzIFkgL2tZw2nqbWZ3ZAOKrg/49XRZqqST28.jpg?size=1280x533&quality=90&sign=71307c43490803f12b5270389c9041b8" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Природа 1</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img3.akspic.ru/image/102919-otrazhenie-dikaya_mestnost-ozero-derevo-priroda-1920x1080.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Природа 2</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://s1.1zoom.ru/b5050/975/359653-admin_1920x1080.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Природа 3</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="categories">
        <div class="container">
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
                        <div class="col-sm-4">
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
    </section>
<?php get_footer(); ?>