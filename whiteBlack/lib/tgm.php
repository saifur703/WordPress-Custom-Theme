<?php

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'white_black_register_required_plugins' );

function white_black_register_required_plugins() {

	$plugins = array(


		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'white_black',              
		'default_path' => '',     
		'menu'         => 'tgmpa-install-plugins', 
		'has_notices'  => true,
		'dismissable'  => true,        
		'dismiss_msg'  => '',              
		'is_automatic' => false,                 
		'message'      => '',                     

	
	);

	tgmpa( $plugins, $config );
}
