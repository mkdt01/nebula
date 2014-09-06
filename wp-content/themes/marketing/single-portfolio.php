<?php

/*
Template Name: Full Width
*/

?>


<?php get_header(); ?>

	<div class="container">
		<div class="page-header">
		
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<div class="row">	
			
				<div class="col-sm-7 col-md-8">	
					
						<h1 style="margin-bottom:0;"><?php the_title(); ?></h1>



				</div>
				
				<div class="col-sm-5 col-md-4 prev-next">
					<p class="text-right" style="margin-top:26px; margin-bottom:0; font-size:24px;">
						<?php next_post_link( '%link', '<span class="icon ion-arrow-left-c"></span> Previous' ); ?>

						&emsp;

						<?php previous_post_link( '%link', 'Next <span class="icon ion-arrow-right-c"></span>' ); ?>
					</p>
				</div> 
				
				<div class="col-sm-12">
				
					<h4 class="h2" style="margin-top:0;"><small style="font-siz"><?php 

// literally the hardest way to achieve this... 
// but it works						
						
$term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "names"));
$count = count($term_list);
$i = 0;
foreach ( $term_list as $term ) {
	if(++$i === $count) {
		echo  $term;
	} else {
		echo  $term . ", ";
	}

}

						
						?></small></h4>
				
				</div>
				
			</div> <!--end row-->	
	
<?php endwhile; endif; ?>
<?php rewind_posts(); ?>	

		</div> <!--end page-header-->
	</div> <!-- end container -->
	
	<div class="container">
		<div class="row">
		
			<div class="col-sm-7 col-md-8">
			
			<?php 			 
				$images = get_field('portfolio_images');
				
				if( $images ): ?>
				
				<?php foreach( $images as $image ): ?>

			<!--
<div class="row">
				<div class="col-sm-12 portfolio-single-images">
-->
				
					<p><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" /></p>
			<!--
	
				</div>
			</div>
-->
			
			<?php endforeach; ?>
				   
			<?php endif; ?>
		
			</div> <!-- end col-sm-9 -->
			
			<div class="col-sm-5 col-md-4">
			
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