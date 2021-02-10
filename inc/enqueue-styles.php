<?php
//Enqueue scripts styles.
function sp_scripts() {
	wp_enqueue_style(
		'style.min.css',
		get_template_directory_uri().'/style.min.css',
		[],
		'1.0.0',
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'sp_scripts' );
