<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
}

?>
<?php 
function advanced_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    
    <div id="individual-comment">
        <div id="comment-pic">
     <?php echo get_avatar($comment,$size='48',$default); ?>
        </div>

           <div id="comment-text">
       <a href="<?php comment_author_url(); ?>"><?php echo comment_author(); ?></a>
       <span> on <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?><?php edit_comment_link(__('(Edit this comment)'),'  ','') ?></span>


     <?php if ($comment->comment_approved == '0') : ?>
       <em><?php _e('Your comment is awaiting moderation.') ?></em>
       <br />
     <?php endif; ?>	
         <?php comment_text() ?>
<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
        </div>
</li>
<?php } ?>