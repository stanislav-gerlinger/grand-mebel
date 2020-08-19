<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
get_header(); ?>
    <section class="post__section">
        <div class="container">
            <div class="row">

                <?php $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra nisi id justo consectetur tincidunt. Nulla lobortis diam id rhoncus dapibus. Etiam ipsum lacus, vestibulum vitae luctus laoreet, congue eu orci. Suspendisse potenti. Sed et nunc quis nisi lacinia ultrices malesuada a ante. Donec dictum augue erat, id tincidunt ante condimentum a. Aenean rhoncus fringilla sapien. Nam diam elit, tincidunt eu varius nec, semper vel orci. Vivamus eleifend sapien nec vestibulum sollicitudin. Donec porta leo ac dictum cursus. Aenean gravida ultricies lacinia." ?>
                <?php for ($i = 1; $i <= 24; $i++) : ?>
                    <div class='post__wrapper'>
                        <div class='post'>
                            <h3>Test Post <?= $i ?></h3>
                            <article><?= $content ?></article>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="<?php content_class_by_sidebar(); ?>">
                    <h1><?php
                        if (is_day()) : printf('Daily Archives: %s', get_the_date());
                        elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y'));
                        elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
                        else : 'Archives';
                        endif; ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('loop'); ?>
                    <?php endwhile;
                    else: echo '<p>Нет записей.</p>'; endif; ?>
                    <?php pagination(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>