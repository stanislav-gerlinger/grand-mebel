<?php
/**
 * Страница архивов записей (archive-product.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
get_header(); ?>
archive-product.php
<?php echo $page->title ?>;
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h1><?php // заголовок архивов
					if (is_day()) : printf('Daily Archives: %s', get_the_date());
					elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y'));
					elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
					else : 'Archives';
				endif; ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('product'); ?>
				<?php endwhile;
				else: echo '<p>Нет записей.</p>'; endif; ?>	 
				<?php pagination(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>