<?php
if (!defined("ABSPATH")) exit;

global $g;	

// . "?a=" . rand(1, 1000)
add_action('wp_enqueue_scripts', 'theme_name_styles');
function theme_name_styles() {		
	wp_enqueue_style("my_libs", get_template_directory_uri() . "/assets/css/libs.min.css", array(), null);
	wp_enqueue_style("my_styles", get_template_directory_uri() . "/assets/css/styles.css", array(), null);	
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts() {		
	wp_enqueue_script("my_libs", get_template_directory_uri() . "/assets/js/libs.min.js", array('jquery'), null, true);
	wp_enqueue_script("my_js", get_template_directory_uri() . "/assets/js/scripts.js", array('jquery'), null, true);
}

function print_img($image, $gallery = false){

	switch(gettype($image)) {
		case "string": $image = get_field($image);
	}

	if(!empty($image)){
		$url = $image['url'];
		$alt = $image['alt'];
	?>	

	<?php if($gallery){ $href = $image['description']; ?>
		<a href="<?= $href ?>" target="_blank">
	<?php } ?>

	<img src="<?= $url ?>" alt="<?= $alt ?>" loading="lazy">	

	<?php if($gallery){ ?></a><?php } ?>

	<?php
	}
}

function format_phone($phone){
	$phone = preg_replace('/[^0-9]/', '', $phone); 
	$phone = preg_replace('/^38/', '+38', $phone);
	return $phone;
}

function mydump($x) {
	echo "<pre>" . print_r($x, 1)  . "<pre>";
}

add_theme_support('title-tag');

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}

add_filter('wpcf7_autop_or_not', '__return_false');

function clean_wp () {
	remove_action('wp_head', 'wp_generator');               
	remove_action('wp_head', 'wlwmanifest_link');            
	remove_action('wp_head', 'rsd_link');                    
	remove_action('wp_head', 'wp_shortlink_wp_head');   
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);    
	add_filter('the_generator', '__return_false');            
	// add_filter('show_admin_bar','__return_false');  
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action ( 'wp_head' , 'feed_links_extra' , 3 );
}
add_action('after_setup_theme', 'clean_wp');


add_filter('tiny_mce_before_init', 'my_adds_alls_elements', 20);
function my_adds_alls_elements($init) {
	if(current_user_can('unfiltered_html')) {
		$init['extended_valid_elements'] = 'span[*]';
	}
	return $init;
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
	if( $dosvg ){
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		} else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}

function custom_theme_menus() {
	register_nav_menu('main-menu', 'Main menu');
	register_nav_menu('footer-menu-1', 'Footer menu 1');
	register_nav_menu('footer-menu-2', 'Footer menu 2');
	register_nav_menu('header-menu', 'Header menu');
}

add_action('after_setup_theme', 'custom_theme_menus');


function get_page_id_by_template_name($template_name) {
	global $wpdb;
	// Query the database for the page ID based on the template name
	$page_id = $wpdb->get_var(
		 $wpdb->prepare(
			  "SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_wp_page_template' AND meta_value=%s",
			  $template_name
		 )
	);
	return $page_id;
}



add_action( 'wp_footer', 'mycustom_wp_footer', 99 );
function mycustom_wp_footer() {
?>
<script>
		jQuery(document).ready(function() {});
</script>
<?php
}