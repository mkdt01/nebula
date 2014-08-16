<!--Portfolio-->
	
	<div class="container">
		<div class="row">
	
			<?php 
				$args = array(
				'post_type'		=> 'portfolio'
				);
					
				$the_query = new WP_Query( $args );
			?>
														
			<div class="btn-portfolio">
				<button class="filter" data-filter="all">All</button>						
				<button class="filter" data-filter=".5">Wordpress</button>
				<button class="filter" data-filter=".6">Analyst</button>
			</div>
	

		

			<div id="Container" class="containermix">

				
				<?php if (have_posts()) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
												
					<div class="mix <?php $term = get_field('category'); echo $term; ?>" data-my-order="1">
						<a href="<?php the_permalink(); ?>">
							<div class="overlay">
								<div class="art-table">
									<h4><?php the_title(); ?></h4>
								</div>
																
							</div>
						</a>
						<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field( 'thumbnail' ); ?>"/></a>
					</div>
				
					
				<?php endwhile; endif; ?>
				
		
					<div class="gap"></div>
				
			</div> <!--end id container -->
		</div>	
	</div> <!-- end conainer-->
		
	
	
	
	<!--end portfolio-->
