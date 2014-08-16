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
			
			<div class="col-xs-6 col-sm-3">			
				<div class="portfolio-piece">		
					<p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" /></a></p>					
				</div>
				
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3></a>
			</div>
			
			
			<?php $portfolio_count = $the_query->current_post + 1; ?>	
			<?php if ( $portfolio_count % 4 == 0): ?>
			</div><div class="row">
			<?php endif; ?>
			
			
			<?php endwhile; endif; ?>
		
		
	</div> <!-- end Row -->
</div> <!--end container -->


<?php get_footer(); ?>