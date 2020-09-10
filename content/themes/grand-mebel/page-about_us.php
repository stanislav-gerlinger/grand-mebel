<?php
/**
 * Страница с шаблоном "О нас" (page-about_us.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 * Template Name: Страница с шаблоном "О нас"
 */
get_header(); ?>
    <div class="content">
        <p><b>Мы компания Гранд мебель, иы продаем дерево, железо, двп, дсп и все что вы захотите!</b></p>
        <form>
            <fieldset>
                <legend>Напишите нам</legend>
                <label>Введите ваше имя:
                <br>
                <input type="text" placeholder="Введите ваше имя">
            </label>
                <br>
                <label>Введите ваш почтовый адрес:
                <br>
                <input class="email" type="email" placeholder="Введите ваш email">
            </label>
                <br>
                <label> Напишите отзыв:
              <br>
              <textarea cols="40" rows="10" placeholder="Оставьте ваш отзыв о нашем сайте"></textarea>
            </label>
            </fieldset>
        </form>
        <br>
        <fieldset>
            <legend>Наше местоположение</legend>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3a71753da21b675bd82b35ef05787eac56a54969a78ff2fe92388fd119eadfe7&amp;width=676&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
        </fieldset>
    </div>
<?php get_footer(); ?>