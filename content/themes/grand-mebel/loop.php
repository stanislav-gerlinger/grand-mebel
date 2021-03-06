<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */ 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-12">
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
		<?php } ?>
		<div class="col-sm-12">
            <?= get_post_meta($post->ID, 'mini-description', true); ?>
		</div>
	</div>
</article>