<?php

$classes = array(
	get_template_directory() . "/lib/menus.php"
);

foreach($classes as $class) {

	if ( file_exists( $class ) ) {

		require_once( $class );

	}

}

$Menus_Endpoint = new Menus_Endpoint();
$Menus_Endpoint->init();