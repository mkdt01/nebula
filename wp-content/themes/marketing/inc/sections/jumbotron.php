<!-- Main jumbotron for a primary marketing message or call to action -->

	<?php	// check if the flexible content field has rows of data // loop through the rows of data
				
	if( have_rows('jumbotron_feature') ): while ( have_rows('jumbotron_feature') ) : the_row(); ?>

		<div class="jumbotron" style="background-image: url('<?php the_sub_field( 'feature_image' );?>');">
			<div class="bgd-opaque">
				<div class="container">
						
					<?php the_sub_field( 'content' ); ?>
			
		<?php endwhile; endif; ?>
			        
			     </div><!--end container-->
			</div><!--end background-opaque-->
		</div><!--end jumbotron -->