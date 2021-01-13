<?php
/**
 * Шаблон страницы "О нас" (page-about_us.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 * Template Name: Шаблон страницы "О нас"
 */
get_header(); ?>
    <div class="container">
        <p class="page-contacts__text"><b>Мы компания Гранд мебель, иы продаем дерево, железо, двп, дсп и все что вы захотите!</b></p>
        <div class="page-contacts__form">
            <section>
                <form>
                    <fieldset>
                        <legend>Напишите нам</legend>

                        <div class="row">
                            <div class="col-sm-3">
                                <label>Введите ваше имя:</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Введите ваше имя">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <label>Введите ваш почтовый адрес:</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="email" type="email" placeholder="Введите ваш email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label> Напишите отзыв:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <textarea placeholder="Оставьте ваш отзыв о нашем сайте"></textarea>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </section>
            <section>
                <fieldset>
                    <legend>Наше местоположение</legend>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3a71753da21b675bd82b35ef05787eac56a54969a78ff2fe92388fd119eadfe7&amp;width=676&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                </fieldset>
            </section>
        </div>
    </div>
<?php get_footer(); ?>