<?php
/**
 * Register wp_body_open 
 *
 * @since nanotheme 1.0
 */
function display_message_for_unauthorized_users() {
	if ( ! is_user_logged_in() ):
	?>
		<div class="message-for-unauthorized-users">
			<p>
				Хотите получить больше возможностей?
				<a href="<?php echo wp_login_url(); ?>">Авторизуйтесь</a>!
			</p>
		</div>
	<?php
	endif;
}
add_action( 'wp_body_open', 'display_message_for_unauthorized_users' );

/**
 * Register navigation menus uses wp_nav_menu  
 *
 * @since nanotheme 1.0
 */
function nanotheme_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'nanotheme' )
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'nanotheme_menus' );


/**
 * Custom post type Wordpress 
 *
 * @since nanotheme 1.0
 */
 /*
function create_post_type() {
   register_post_type( 'video_wid', array(
	  'labels' => array(
		  'name' => __( 'Videos' ),
		  'singular_name' => __( 'video' )
	  ),
		'public' => true,
		'has_archive' => true,
	  )
	);
}
add_action( 'init', 'create_post_type' );
*/

@include('custom-post-type.php');
 
$video = new Custom_Post_Type( 'video_wid', array(
				  'name' => __( 'Videos' ),
				  'singular_name' => __( 'video' )
			  ),
			  array('public' => true,'has_archive' => true)
	  );
$video->add_taxonomy( 'category' );
$video->add_taxonomy( 'author' );
 
$video->add_meta_box( 
    'Video Info', 
    array(
        'Year' => 'text',
        'Genre' => 'text'
    )
);
 
$video->add_meta_box( 
    'Artist Info', 
    array(
        'Name' => 'text',
        'Nationality' => 'text'
    )
);

$video->add_meta_box( 
    'order', 
    array(
        'orderby' => '0',
    )
);
