<?php
	function registerMenus() {
	  register_nav_menus( array( 'mainmenu' => __( 'Main Menu' ), ) );
	}
	add_action( 'init', 'registerMenus' );
?>