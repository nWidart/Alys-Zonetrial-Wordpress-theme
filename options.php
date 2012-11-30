<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data( STYLESHEETPATH . '/style.css' );
	$themename = $themename['Name'];
	$themename = preg_replace( "/\W/", "", strtolower( $themename ) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ( $options_categories_obj as $category ) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ( $options_pages_obj as $page ) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/library/img/';

	$options = array();

	/*
	Social Tab Settings
	-------------------------------------------------------------------------------------------------------------------------------------- */
	$options[] = array( "name" => "Social",
		"type" => "heading" );

	$options[] = array( "name" => "Twitter Username",
		"desc" => "Insert your twitter username. Will be used in the about page and the contact page.",
		"id" => "twitterid",
		"std" => "",
		"type" => "text" );

	$options[] = array( "name" => "Facebook Page",
		"desc" => "Link to your Facebook page, <strong>with http://</strong>. It will be shown in the header area of the site.",
		"id" => "facebookid",
		"std" => "",
		"type" => "text" );

	// $options[] = array( "name" => "Facebook Username",
	// 	"desc" => "Enter your facebook username. This will be used for Facebook Open Graph, making sharing your website easy.",
	// 	"id" => "facebookUsername",
	// 	"std" => "",
	// 	"type" => "text" );

	// $options[] = array( "name" => "Facebook Id",
	// 	"desc" => "Use your facebook ID. Go to http://graph.facebook.com/YOUR_USERNAME",
	// 	"id" => "facebookUserId",
	// 	"std" => "",
	// 	"type" => "text" );

	return $options;
}
