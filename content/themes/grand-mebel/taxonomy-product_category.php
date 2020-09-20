<?php
/**
 * Страница архивов записей (taxonomy-product_category.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
get_header(); ?>
taxonomy-product_category.php
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="row">
					<h1><?php // заголовок архивов
						if (is_day()) : printf('Daily Archives: %s', get_the_date());
						elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y'));
						elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
						else : 'Archives';
					endif; ?></h1>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-sm-4">
							<?php get_template_part('loop'); ?>
						</div>
					<?php endwhile;
					else: echo '<p>Нет записей.</p>'; endif; ?>	 
					<?php pagination(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>