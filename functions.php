<?php

$template_directory = get_template_directory() . '/';

// Loads the loader of oculus if not included before
require $template_directory . 'includes/libs/better-framework/oculus/better-framework-oculus-loader.php';

// Includes BF loader if not included before
require $template_directory . 'includes/libs/better-framework/init.php';

// handy functions and overrides
include $template_directory . 'includes/functions.php';

// Includes core of theme
include $template_directory . 'includes/libs/bs-theme-core/init.php';

// do config
include $template_directory . 'includes/pages/global.php';
if ( is_admin() ) {
	include $template_directory . 'includes/pages/init.php';
}

// Registers and prepare all stuffs about BF that is used in theme
include $template_directory . 'includes/publisher-setup.php';
new Publisher_Setup();

// Fire up Publisher search
include $template_directory . 'includes/publisher-search.php';
Publisher_Search::init();

// Fire up Publisher comments
include $template_directory . 'includes/publisher-comments.php';
Publisher_Comments::init();

// Fire up Publisher third-party plugins compatibility
include $template_directory . 'includes/publisher-plugins-compatibility.php';
Publisher_Plugins_Compatibility::init();

// Fire up Publisher
include $template_directory . 'includes/publisher.php';
new Publisher();

// Fire up Publisher admin
include $template_directory . 'includes/publisher-admin.php';
Publisher_Admin::init();


function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('url').'/wp-content/uploads/2017/04/logo-452x120-min.png) !important;background-size: 100%!important;width: 270px!important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');

function custom_loginlogo_url($url) {
	return 'https://tintucso.org';
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

add_filter( 'wp_video_shortcode', 'filter_function_name_11', 10, 5 );
function filter_function_name_11( $output, $atts, $video, $post_id, $library ){
	if( $atts['class'] == "wp-video-shortcode"){
		if( strlen($atts['src']) != 0){
			$src = $atts['src'];
		} elseif(strlen($atts['mp4']) != 0){
			$src = $atts['mp4'];
		} elseif (strlen($atts['flv']) != 0){
			$src = $atts['flv'];
		} elseif (strlen($atts['webm']) != 0){
			$src = $atts['webm'];
		} elseif (strlen($atts['wmv']) != 0){
			$src = $atts['wmv'];
		} else {
			$src = $atts['ogv'];
		};
		$output = '<div class="iframe-out"><iframe class="itnews_iframe" src="https://video.tintucso.org/index.php?url=' . $src . '" width="560px" height="315px" allowfullscreen ></iframe></div>';
	};
	return $output;
}
add_action('wp_head', 'hook_wp_head_single', 10);
function hook_wp_head_single() {
	if (is_single()) {
		global $post;
		echo 	'<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7445075400250061",
    enable_page_level_ads: true
  });
</script>'."\n";
	}
}

add_action('wp_head', 'hook_wp_head_single_meta', 2);
function hook_wp_head_single_meta() {
	if (is_single()) {
		global $post;
		$datePublished_ = get_the_date( 'Y-m-d\TH:i:s\+07:00' , $post->ID);
		$dateModified_ = get_the_modified_date( 'Y-m-d\TH:i:s\+07:00' , $post->ID);
		echo "<meta itemprop='author' content='Tin Tức Số'>\n";
		echo "<meta itemprop='datePublished' content='" . $datePublished_ . "'>\n";
		echo "<meta itemprop='dateModified' content='" . $dateModified_ . "'>\n";

	}
}

// Filter Functions with Hooks
function video_mce_button() {
  // Check if user have permission
  if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
    return;
  }
  // Check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'video_tinymce_plugin' );
    add_filter( 'mce_buttons', 'video_register_mce_button' );
  }
}
add_action('admin_head', 'video_mce_button');

// Function for new button
function video_tinymce_plugin( $plugin_array ) {
  $plugin_array['video_mce_button'] = get_template_directory_uri() .'/js/video_editor_plugin.js';
  return $plugin_array;
}

// Register new button in the editor
function video_register_mce_button( $buttons ) {
  array_push( $buttons, 'video_mce_button' );
  return $buttons;
}

// Add Shortcode
function vd_embed( $atts ) {

	// Attributes
	
	$url = $atts["url"];
	$caption = $atts["caption"];
	return '<div class="iframe-out"><iframe class="itnews_iframe" src="https://video.tintucso.org/index.php?url=' . $url . '" width="560px" height="315px" allowfullscreen ></iframe></div><span><p style="text-align:center;font-style:italic;">' . $caption . '</p></span>';
}
add_shortcode( 'vd', 'vd_embed' );
function shortcode_button_script() 
{
    if(wp_script_is("quicktags"))
    {
        ?>
            <script type="text/javascript">
                
                //this function is used to retrieve the selected text from the text editor
                function getSel()
                {
                    var txtarea = document.getElementById("content");
                    var start = txtarea.selectionStart;
                    var finish = txtarea.selectionEnd;
                    return txtarea.value.substring(start, finish);
                }

                QTags.addButton( 
                    "code_shortcode", 
                    "Video", 
                    callback
                );

                function callback()
                {
                    var selected_text = getSel();
                    QTags.insertContent("[vd url=\"" + selected_text + "\" caption=\"\" ]");
                }
            </script>
        <?php
    }
}

add_action("admin_print_footer_scripts", "shortcode_button_script");

/**
 * disable feed
 */
function fb_disable_feed() {
	//wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
	$url = home_url();
	wp_redirect( $url );
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

add_filter('qqworld-auto-save-images-save-outsite-link', 'save_outside_link', 10, 2);
function save_outside_link($content, $link) {
	$content = '<a href="'.$link.'" target="_blank" rel="nofollow">Original Link</a>';
	return $content;
}