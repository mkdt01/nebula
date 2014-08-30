<!-- Gallery -->

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		
			<div class="col-sm-3">
				<h3>Our Partners</h3>
				<p>We help our brands better connect with their audiences</p>
			</div>
			
			<div class="col-sm-9">	
				<?php 			 
				$images = get_sub_field('gallery');
				
				if( $images ): ?>
				
				<?php foreach( $images as $image ): ?>
				
					<div class="col-xs-4 col-sm-3 gallery-single">
					
					<div class="gallery-image"> 
			            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					
					</div><!-- end col-sm-3-->
				
		        <?php endforeach; ?>
				   
				<?php endif; ?>
			</div>
			
		</div> <!-- end col-sm12-->
	</div>
</div>