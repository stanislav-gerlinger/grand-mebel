<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
get_header(); ?>
    <section class="content">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.wallscloud.net/converted/2254642368-Priroda-EGDg-1920x1080-MM-100.jpg" class="d-block w-100" alt="...">
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
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="product-category">
                        <a href="https://shaparbrand.ru/catalog/kardigany-zhenskie-vyazanye-ruchnoj-raboty/">
                            <h4 class="loop-title"><span>Категория 1</span></h4>
                            <img src="https://i.pinimg.com/474x/8d/60/0d/8d600dbf11f475b7d59156b7470a85aa.jpg" title="Кардиганы" alt>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="loop loop-product-category loop-grid">
                        <a href="https://shaparbrand.ru/catalog/svitery-zhenskie-vyazanye-ruchnoj-raboty-dzhempera-pulovery/">
                            <h4 class="loop-title"><span>Категория 2</span></h4>
                            <img src="https://i.pinimg.com/474x/4b/02/46/4b0246b399433877779f30eaafa0900b.jpg" title="Свитера" alt>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="loop loop-product-category loop-grid">
                        <a href="https://shaparbrand.ru/catalog/svitery-zhenskie-vyazanye-ruchnoj-raboty-dzhempera-pulovery/">
                            <h4 class="loop-title"><span>Категория 3</span></h4>
                            <img src="https://i.pinimg.com/474x/e5/4a/51/e54a51ef8d19b1bd679b9e3fedf68c9c.jpg" title="Свитера" alt>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>