<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Hemingway Rewritten
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function hemingway_rewritten_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'hemingway_rewritten_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hemingway_rewritten_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// If we have no sidebar active, set layout to one-column.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'one-column';
	}

	return $classes;
}
add_filter( 'body_class', 'hemingway_rewritten_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function hemingway_rewritten_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'hemingway-rewritten' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'hemingway_rewritten_wp_title', 10, 2 );

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function hemingway_rewritten_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'hemingway_rewritten_setup_author' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
if ( ! function_exists( 'hemingway_rewritten_excerpt_more' ) ) :
    function hemingway_rewritten_excerpt_more( $more ) {
        $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
            esc_url( get_permalink( get_the_ID() ) ),
            /* translators: %s: Name of current post */
            sprintf( esc_html__( 'Continue reading %s', 'hemingway-rewritten' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
        return ' &hellip; ' . $link;
    }
    add_filter( 'excerpt_more', 'hemingway_rewritten_excerpt_more' );
endif;
