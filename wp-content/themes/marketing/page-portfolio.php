<?php
/**
*	Template Name: Portfolio Grid Template
**/
?>

<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12 page-header">
		
			<h1>Portfolio</h1>
		
		</div><!-- end col-md-12-->
	</div> <!-- end row-->
</div><!--end container-->



<div class="container">
	<div class="row">
		
			<?php	
				$args = array(
				
					'post_type'	=> 'portfolio',
				
				);
				
				$the_query = new WP_Query( $args );
			?>
			
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			//variables
				$thumbnail_id = get_post_thumbnail_id();
				$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );				
			?>
			
			
			<div class="col-xs-6 col-sm-4 col-md-3 portfolio-grid">
				
				<div class="portfolio">
					<a href="<?php the_permalink(); ?>">
						<div class="portfolio-piece">
						
							<img src="<?php echo $thumbnail_url[0]; ?>" />
						
						</div>			
					</a>
				</div>
				<div class="portfolio-title">
					<a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3></a>
				</div>
			
	
			</div>
		
			<!--
			<?php $portfolio_count = $the_query->current_post + 1; ?>	
			<?php if ( $portfolio_count % 4 == 0): ?>
			</div><div class="row">
			<?php endif; ?> -->
			
			
			<?php endwhile; endif; ?>
		
		
	</div> <!-- end Row -->
</div> <!--end container -->


<?php get_footer(); ?>