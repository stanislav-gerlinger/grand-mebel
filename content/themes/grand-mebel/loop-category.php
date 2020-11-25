<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */ 
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="meta">
            <?php the_tags('<p>Тэги: ', ',', '</p>'); ?>
        </div>
        <div class="row">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="col-sm-3">
                    <a href="<?php the_permalink(); ?>" class="thumbnail">
                        <?php get_the_post_thumbnail_url() ; ?>
                    </a>
                </div>
            <?php } ?>
            <div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php }  ?>">
                <?php the_content(''); ?>
            </div>
        </div>
    </article>