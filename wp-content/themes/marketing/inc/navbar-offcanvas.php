<nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
  <a class="navmenu-brand" href="#">Mark Dohnt</a>

		<?php // Loading WordPress Custom Menu

		wp_nav_menu( array(
			'theme_location'  => 'single-menu',
			'menu_class'      => 'nav navmenu-nav',
					) );
		?>

</nav>
<div class="menu-offcanvas">
  <a type="" class="btn menu-button" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
  		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
  </a>
</div>
