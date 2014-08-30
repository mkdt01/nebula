<?php

/*
Template Name: Full Width
*/

?>


<?php get_header(); ?>

	<div class="container">
		<div class="page-header">
			<div class="row">	
			
				<div class="col-xs-9">	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
						<h1>Portfolio - <?php the_title(); ?></h1>
					<?php endwhile; endif; ?>
					<?php rewind_posts(); ?>
				</div>
				
				<div class="col-xs-3 prev-next">
					<?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
					<a href="<?php bloginfo( 'url' ); ?>/?p=212"><span class="glyphicon glyphicon-th"></span></a>
					<?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
				</div> 
			</div> <!--end row-->
		</div> <!--end page-header-->
	</div> <!-- end container -->
	
	<div class="container">
		<div class="row">
		
			<div class="col-sm-9">
			
			<?php 			 
				$images = get_field('portfolio_images');
				
				if( $images ): ?>
				
				<?php foreach( $images as $image ): ?>

			<div class="row">
				<div class="col-sm-12 portfolio-single-images">
				
					<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				
				</div>
			</div>
			
			<?php endforeach; ?>
				   
			<?php endif; ?>
		
			</div> <!-- end col-sm-9 -->
			
			<div class="col-sm-3">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div class="col-sm-12">
						<div class="page-header">
							<h3>Project Summary</h3>
						</div>
					
					<?php the_content(); ?>
					
						<p><a class="btn btn-large btn-primary" href="<?php the_field( 'link' ); ?>">View Final Project <span class="glyphicon glyphicon-arrow-right"</span></a></p>
					</div>	<!--end col-sm12-->
			
				<?php endwhile; endif; ?>
			
			</div> <!--end col-sm-3-->
		
		</div> <!-- end row-->
	</div>	<!-- end container -->
	
			
   
<?php get_footer(); ?>