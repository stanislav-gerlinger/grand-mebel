<?php
/**
 * Шаблон отдельной записи (single-product.php)
 * @package WordPress
 * @subpackage your-grand-mebel-template-3
 */
get_header(); ?>
single-product.php
<section>
    <div class="container">
  		<div class="row">
  			<div class="col-12">
  				<h3><?php the_title(); ?></h3>
  			</div>
  		</div>
    	<div class="row">
        	<div class="col-sm-12 col-md-12 col-lg-4">
        		<img src="http://germes-plit.ru/upload/000/u2/017/6e5dc621.jpg" alt="" width="100%">
        	</div>
        	<div class="col-sm-12 col-md-12 col-lg-8">
        		<div class="description">
        			<div class="row">   				
    					<div class="col-sm-12">
        						Производитель..................................................................................................................................................Барыш мебель
        				</div>
        			</div>
    				<div class="row">
        				<div class="col-sm-6"><p class="item-size">Размеры</p></div>
	        				<div class="col-sm-6">
	        					<div class="row">
	        						<div class="col-sm-12">
	        							<p class="item-size-value">Zalupa</p>
	        						</div>	        		
	        					</div>
	        					<div class="row">
	        						<div class="col-sm-12">
	        							<p class="item-size-value">Zalupa</p>	
	        						</div>	        		
	        					</div>
	        					<div class="row">
	        						<div class="col-sm-12">
	        							<p class="item-size-value">Zalupa</p>	
	        						</div>	        		
	        					</div>
	        				</div>
        				</div>
	        		</div>
	        	</div>
	        </div>
        </div>
    </div>
<?php get_footer(); ?>
