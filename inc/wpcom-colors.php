<?php
/* Custom Colors: Hemingway Rewritten */

//Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body,#infinite-footer .container,.entry-tags a:before', 'background-color' ),
) );

add_color_rule( 'txt', '#1abc9c', array(
	array( '.site-footer button, .site-footer input[type="button"], .site-footer input[type="reset"], .site-footer input[type="submit"], .widget_search .search-submit', 'background-color' ),
	array( 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover', 'background-color' ),
	array( '.widget_search .search-submit', 'border-color' ),
	array( '.site-footer button:hover, .site-footer input[type="button"]:hover, .site-footer input[type="reset"]:hover, .site-footer input[type="submit"]:hover, .widget_search .search-submit:hover', 'background-color', '-1' ),
	array( '.widget_search .search-submit:hover', 'border-color', '-1' ),
	array( '.featured-image .flag', 'background-color' ),
	array( '.jetpack-recipe-title', 'border-color' ),
	array( '.entry-tags a:hover', 'background-color' ),
	array( '.entry-tags a:hover:after', 'border-right-color' ),
	array( '#header-search .search-submit', 'border-color' ),
	array( '#header-search .search-submit', 'background-color' ),
	array( '#header-search .search-submit:hover', 'background-color', '-1' ),
	array( '#header-search .search-submit:hover', 'border-color', '-1' ),

	array( 'a,a:visited,a:hover,a:focus,a:active,.entry-title a:hover', 'color', 'bg' ),

	array( '.site-title a:hover,.site-title a:focus', 'color', '#1d1d1d' ),
	array( '.site-footer a,.site-footer a:visited,.site-footer a:hover,.site-footer a:focus,.site-footer a:active', 'color', '#1d1d1d' ),
	array( '.widget-areas a,.widget-areas a:visited,.widget-areas a:hover,.widget-areas a:focus,.widget-areas a:active', 'color', '#1d1d1d' ),
	array( '#tertiary .widget_eventbrite .eb-calendar-widget .event-list li a:link .eb-event-list-title,
			#tertiary .widget_eventbrite .eb-calendar-widget .event-list li a:visited .eb-event-list-title,
			#tertiary .widget_eventbrite .eb-calendar-widget .calendar .current-month,
			#tertiary .widget_eventbrite .eb-calendar-widget .event-paging,
			#tertiary .widget_eventbrite th', 'color', '#1d1d1d' ),
),
__( 'Main Accent' ) );

add_color_rule( 'link', '#ffffff', array(

),
__( 'Secondary Accent' ) );

add_color_rule( 'fg1', '#ffffff', array(

),
__( 'Color Name' ) );

add_color_rule( 'fg2', '#ffffff', array(

),
__( 'Color Name' ) );

//Extra rules

add_color_rule( 'extra', '#bbbbbb', array(
	array( '.comment-metadata a', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#dddddd', array(
	array( '.sep', 'color', 'bg' ),
	array( 'th,td', 'border-color', 0.5 ),
) );

add_color_rule( 'extra', '#eeeeee', array(
	array( '.format-aside .entry-content, blockquote, pre', 'background-color', 0.2 ),
	array( 'input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],textareali > article.comment,.hentry,.widget ul li,.widget,.site-main .comment-navigation, .site-main .paging-navigation, .site-main .post-navigation,.comment-list > li:first-child > article.comment:first-child,.page-title', 'border-color', 0.5 ),
) );

add_color_rule( 'extra', '#ffffff', array(
	array( '.site-title a,.site-title a:visited', 'color', '#1d1d1d' ),

	array( '.entry-tags a,.entry-tags a:visited', 'color', 'bg' ),

	array( '.entry-tags a:hover', 'color', 'txt' ),
	array( '.featured-image .flag', 'color', 'txt' ),
	array( '.site-footer button, .site-footer input[type="button"], .site-footer input[type="reset"], .site-footer input[type="submit"], .widget_search .search-submit', 'color', 'txt' ),
	array( '.site-footer button:hover, .site-footer input[type="button"]:hover, .site-footer input[type="reset"]:hover, .site-footer input[type="submit"]:hover, .widget_search .search-submit:hover', 'color', 'txt' ),
	array( 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover', 'color', 'txt' ),
	array( '#header-search .search-submit', 'color', 'txt' ),
) );

add_color_rule( 'extra', '#f1f1f1', array(
	array( 'address', 'background-color', 0.2 ),
) );

add_color_rule( 'extra', '#f9f9f9', array(
	array( '.entry-content table tbody > tr:nth-child(odd) > td', 'background-color', 0.2 ),
) );

add_color_rule( 'extra', '#000000', array(
	array( 'blockquote', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#2d2d2d', array(
	array( '.entry-title, .entry-title a,.entry-title a:visited,.comments-title', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#262626', array(
	array( '.format-quote .entry-content', 'background-color', 0.2 ),
) );

add_color_rule( 'extra', '#444444', array(
	array( 'body, button, input, textarea', 'color', 'bg' ),
	array( '.widget-title, th', 'color', 'bg' ),
	array( '.comment-author a,.comment-author a:visited', 'color', 'bg' ),

	array( 'mark, ins', 'color', '#fff9c0' ),
) );

add_color_rule( 'extra', '#555555', array(
	array( '.widget', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#666666', array(
	array( '.jetpack-recipe', 'border-color', 0.3 ),
	array( 'blockquote cite', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#767676', array(
	array( '.entry-tags a,.entry-tags a:visited', 'background-color', 0.4 ),
	array( '.entry-tags a:after', 'border-right-color', 0.4 ),

	array( '.entry-categories:before', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#888888', array(
	array( '.wp-caption-text', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#999999', array(
	array( '.entry-meta, .entry-meta a,.entry-meta a:visited,.page-title,.no-comments', 'color', 'bg' ),
) );

//Additional palettes

add_color_palette( array(
	'#ffffff',
	'#cf9e38',
), 'Gold' );

add_color_palette( array(
	'#fcfcfc',
	'#4dbce9',
), 'White & Blue' );

add_color_palette( array(
	'#555555',
	'#39cf9f',
), 'Dark' );

add_color_palette( array(
	'#000000',
	'#9f111b',
), 'Black & Red' );

add_color_palette( array(
	'#efefef',
	'#a4c92a'
), 'Green' );

add_color_palette( array(
	'#f7f7f7',
	'#ca3e78'
), 'Pink' );
