<!-- Gallery -->

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3 class="kilo text-center">Our Partners</h1>
			<h4 class="h3 text-center">We help our brands better connect with their audiences</h3>	
		</div>
		
	</div>
	<div class="row">
			
			<div class="col-sm-12">	
				<?php 			 
				$images = get_sub_field('gallery');
				
				if( $images ): ?>
				
				<?php foreach( $images as $image ): ?>
				
					<div class="col-xs-6 col-sm-3  gallery-single">
					
						<div class="gallery-image"> 
				            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					
					</div>
				
		        <?php endforeach; ?>
				   
				<?php endif; ?>
			</div>
			
		</div> <!-- end col-sm12-->
	</div>
</div>