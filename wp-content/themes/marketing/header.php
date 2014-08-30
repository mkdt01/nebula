<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.ico">

    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    
    <style type="text/css">
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAomIJDkS6rGU4KrPRbKftqooEY-DQtIiQ">
    </script>
    <script type="text/javascript">
      function initialize() {
        
        var coords = new google.maps.LatLng(-37.887832, 145.031416)
        
        var mapOptions = {
          center: coords,
          zoom: 15,
          scrollwheel: false
        };
        
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      
      
        var marker = new google.maps.Marker({
	        position: coords,
	        map: map,
	        title: 'Nebulas Palace of creativity'
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    
  <?php wp_head(); ?>
  </head>

<!----------------------------------------------Navbar------------------------------------------>

<body <?php body_class(); ?>>


<div class="navbar navbar-nebula navbar-static-top" role="navigation">
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
</div> <!--end navbar-->