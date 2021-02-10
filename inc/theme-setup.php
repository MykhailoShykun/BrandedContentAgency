<?php
add_filter('show_admin_bar', '__return_false');
function getCurrentCatID()
{
	global $wp_query;
	if (is_category() || is_single()) {
		$cat_ID = get_query_var('cat');
	}
	return $cat_ID;
}

if ( ! function_exists( 'sp_setup' ) ) :

	function sp_setup() {

		load_theme_textdomain( 'inkStudio-theme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', '*' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		add_theme_support( 'custom-background', apply_filters( 'sp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sp_setup' );
