<div class="container">
	<div class="row">
		<nav class="navbar navbar-default navbar-top">
			<div class="container navcon">

				<div class="row">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
							
				<?php // Loading WordPress Custom Menu
		
				wp_nav_menu( array(
					'theme_location'  => 'header-menu',
					'container_class' => 'collapse navbar-collapse navbar-ex1-collapse nav-menu',
					'menu_class'      => 'nav',
					'menu_id'         => 'main-menu'
							) );
				?>
				</div>
			</div>
		</nav>
	</div>
</div>