<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.ico">

    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    
  <?php wp_head(); ?>
  </head>

<!----------------------------------------------Navbar------------------------------------------>

<body <?php body_class(); ?>>


<nav class="navbar navbar-nebula navbar-static-top" role="navigation">
	<div class="container">
        <div class="navbar-header col-sm-3">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"></a>
        </div>
		<?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse nav-wrap',
				'container_id'      => 'example-one',
                'menu_class'        => 'nav navbar-nav',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
	</div> <!-end container -->
</nav> <!--end navbar-->