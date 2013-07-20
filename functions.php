<?php

// Activate jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

// Twitter Widget
if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'Twitter'),
   'id' => 'homepage-right',
   'description' => __( 'Custom Twitter widget. Change the header link and text in functions.php file.', 'twentyeleven' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => '</aside>',
   'before_title' => '<h2><a href="http://www.twitter.com/chrisota" target="_blank" rel="nofollow" title="@chrisota Twitter - Chris Ota"><span class="icons-social">&#62217;
</span> ',
   'after_title' => '</a></h2>',
) );

if ( ! function_exists( 'twentytwelve_widgets' ) ) :

function twentytwelve_widgets() {
	
	register_sidebar( array(
		'name' => __( 'Footer 1', 'twentytwelve' ),
		'id' => 'footer-1',
		'description' => __( 'First section of Footer', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 2', 'twentytwelve' ),
		'id' => 'footer-2',
		'description' => __( 'Second section of Footer', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	) );
}

add_action( 'widgets_init', 'twentytwelve_widgets' );

endif;

// http://wpforce.com/twitter-facebook-googleplus-fan-follower-count-php/
function twitter_count(){
         $count = get_transient('twitter_count');
    if ($count !== false) return $count;
         $count = 0;
         $dataOrig = file_get_contents('http://twitter.com/users/show/chrisota');
   if (is_wp_error($dataOrig)) {
         return 'Error!';
   }else{
         $profile = new SimpleXMLElement ( $dataOrig );
         $countOrig = $profile->followers_count;
         $count = strval ( $countOrig );
         }
set_transient('twitter_count', $count, 60*60*24); // 24 hour cache
return $count;
}

?>