<?php get_header(); ?>

	<?php
		$args = array(
		'post_type'	=>	'sections'
			
		);
		
		$the_query = new WP_Query( $args );
	?>


	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<?php global $post ?>
	
	<section id="<?php echo $post_slug=$post->post_name;  ?>">
	
		<!--conditionally display the content only if it exists for that section-->
		<?php $content = get_the_content(); ?>
		
		<?php if($content != "") { ?>
			
		<div class="container">
			<div class="row">
				<div class="col-sm-12 intro">
				
					<?php the_content(); ?>
					
				</div>
			</div> <!--end row-->
		
		</div> <!--end container-->
		
		<?php } ?>
		
		<!--conditionally diplay rows from flexibale content ACF plugin -->		
	<?php while(has_sub_field("additional_options")): ?>
	
		<div class="row-layout">
	
			<?php if(get_row_layout() == "jumbotron"): // layout: jumbotron ?>
				 
				<?php get_template_part('inc/sections/jumbotron'); ?>

			<?php elseif(get_row_layout() == "portfolio"): // layout: Portfolio ?>
				 
				<?php get_template_part('inc/sections/portfolio'); ?>
			
			<?php elseif(get_row_layout() == "contact"): // layout: Portfolio ?>
				 
				<?php get_template_part('inc/sections/contact'); ?>
				
			<?php elseif(get_row_layout() == "sales"): // layout: Sales ?>
				 
				<?php get_template_part('inc/sections/sales'); ?>
				
			<?php elseif(get_row_layout() == "carousel"): // layout: Carousel ?>
				 
				<?php get_template_part('inc/sections/carousel'); ?>
				
			<?php elseif(get_row_layout() == "gallery"): // layout: Gallery ?>
				 
				<?php get_template_part('inc/sections/gallery'); ?>

		<?php endif; ?>

		</div> <!--end row laytou-->
	
	<?php endwhile; ?> 
	
	</section>
	
	
	<?php endwhile; endif; ?>	
	
<?php get_footer(); ?>