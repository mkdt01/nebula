<!-- Gallery -->

<div class="container">
	<div class="row">
		<div class="grid">
			<?php 			 
			$images = get_sub_field('gallery');
			
			if( $images ): ?>
			
			<?php foreach( $images as $image ): ?>
			
				<div class="col-xs-3 gallery-single">
				
				<div class="gallery-image"> 
		            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
				</div><!-- end col-sm-3-->
			
	        <?php endforeach; ?>
			   
			<?php endif; ?>
			
		</div> <!-- end col-sm12-->
	</div>
</div>