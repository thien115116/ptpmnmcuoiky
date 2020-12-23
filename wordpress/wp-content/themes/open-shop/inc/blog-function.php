<?php 
/**
 *Blog Function
 * @package     Open Shop
 * @author      ThemeHunk
 * @since       ThemeHunk 1.0.0
 */

        /**
		 * Excerpt count.
		 *
		 * @param int $length default count of words.
		 * @return int count of words
		 */
		function open_shop_excerpt_length( $length ) {
			if(is_admin()){
             	return $length;
             }
			 $excerpt_length = (string) get_theme_mod( 'open_shop_blog_expt_length' );
			 if ( '' != $excerpt_length ) {
			   $length = $excerpt_length;
			 }
			return $length;
		}
		add_filter( 'excerpt_length','open_shop_excerpt_length', 999 );
/**
 * Display Blog Post Excerpt
 */
if ( ! function_exists( 'open_shop_the_excerpt' ) ){
	/**
	 * Display Blog Post Excerpt
	 *
	 * @since 1.0.0
	 */
	function open_shop_the_excerpt(){?>
		<div class="entry-content">
		<?php  $excerpt_type = get_theme_mod( 'open_shop_blog_post_content','excerpt');
		if ( 'full' == $excerpt_type ){
			the_content();
		} elseif('excerpt' == $excerpt_type ){
			the_excerpt();
		} else {
          return false;
		}?>
		</div>	
	<?php }
}

         /**
		 * Read more text.
		 *
		 * @param string $text default read more text.
		 * @return string read more text
		 */
		function open_shop_read_more_text( $text ) {

			$read_more = get_theme_mod( 'open_shop_blog_read_more_txt' );

			if ( '' != $read_more ) {
				$text = $read_more;
			}

			return $text;
		}
      add_filter( 'open_post_read_more', 'open_shop_read_more_text');
/**
 * Function to get Read More Link of Post
 *
 * @since 1.0.0
 * @return html
 */
if ( ! function_exists( 'open_shop_post_link' ) ){

	/**
	 * Function to get Read More Link of Post
	 *
	 * @param  string $output_filter Filter string.
	 * @return html                Markup.
	 */
	function open_shop_post_link( $output_filter = '' ){

		$enabled = apply_filters( 'open_post_link_enabled', '__return_true' );
		if ( ( is_admin() && ! wp_doing_ajax() ) || ! $enabled ){
			return $output_filter;
		}
		$open_shop_read_more_text = apply_filters( 'open_post_read_more', __( 'Read More', 'open-shop' ) );
		$read_more_classes        = apply_filters( 'open_post_read_more_class', array() );
		$post_link = sprintf(
			esc_html( '%s' ),
			'<a class="' . implode( ' ', $read_more_classes ) . ' thunk-readmore button " href="' . esc_url( get_permalink() ) . '"> ' . the_title( '<span class="screen-reader-text">', '</span>', false ) . $open_shop_read_more_text . '</a>'
		);
		$output = ' &hellip;<p class="read-more"> ' . $post_link . '</p>';
		return apply_filters( 'open_shop_post_link', $output, $output_filter );
	}
}
add_filter( 'excerpt_more', 'open_shop_post_link', 1 );
/*******************/
// loader function
/*******************/
if ( ! function_exists( 'open_shop_post_loader' ) ):
function open_shop_post_loader(){
$open_shop_blog_post_pagination = get_theme_mod( 'open_shop_blog_post_pagination','num');
if($open_shop_blog_post_pagination=='num'){
the_posts_pagination();
}
elseif($open_shop_blog_post_pagination=='click'){	
open_shop_load_more_button();
}
elseif($open_shop_blog_post_pagination=='scroll'){
open_shop_scrolling_ajax();
}
}
endif;
