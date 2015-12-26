<?php
	/*
		Plugin Name: eDemo voting toolbox
		Plugin URI: 
		Description: Edemocracy voting toolbox with eDemo assurance handling.
		Version: 0.01
		Author: Claymanus
		Author URI:
	*/

### Version
define( 'EDEMO_TOOLBOX_VERSION', 0.01 );

class eDemoToolBox {
	
	function __construct() {
		### Plugin activation hooks
		register_activation_hook( __FILE__, array( $this, 'plugin_activation' ) );
		register_deactivation_hook( __FILE__, array( $this, 'plugin_deactivation' ) );		
	}
	
	function plugin_activation() {

	}
	
	function plugin_deactivation() {
	

	}
}

if (!isset($eDemoToolBox)) { $eDemoToolBox = new eDemoToolBox(); } 

class eDemo_vote extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'eDemo_vote' );
	}

	function widget( $args, $instance ) {
		// Widget output
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
	}

	function form( $instance ) {
		// Output admin widget options form
	}
}
?>
