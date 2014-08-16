<!-- Key Sales Messages -->

<?php	// check if the flexible content field has rows of data // loop through the rows of data ?>

<?php get_sub_field( 'sales' ) ?>

<?php $med = get_sub_field( 'column' ); ?> 
			

<div class="container">
	<div class="row">
	
		<?php if( have_rows( 'sales') ): while ( have_rows('sales') ) : the_row(); ?>
	
			<div class="col-sm-4">
			
				<div class="thumbnail">
					<img src="<?php the_sub_field( 'image' ); ?>">
				</div>
				
				<div class="sales-content">
					<?php the_sub_field( 'content' ); ?>
				</div>

			</div>
		<?php endwhile; endif; ?>
	</div>
</div>

