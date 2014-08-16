<?php get_header(); ?>

	<div class="container">	
		<div class="row">			
			
			<div class="col-md-9">
			
			<div class="page-header">
				<h1><?php wp_title(); ?></h1>
			</div>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<article class="post">
					
					<h2><a href="<?the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<em>
					<p>
						By <?php the_author(); ?> 
						on <?php the_time( 'l, F, jS, Y' ); ?> 
						in <?php the_category( ', ' ); ?> 
					</p>
					</em>
				</article>				
				
				<?php the_excerpt(); ?>
				
				<hr>
			
			<?php endwhile; else: ?>
			
				<div class="page-header">
					<p>Oooops<p>
				</div>
				
				<p>No content to display</p>
				
			<?php endif; ?>
			
			</div>
			
			<?php get_sidebar( 'blog' ); ?>
			
		</div>
	
	</div>

      
<?php get_footer(); ?>