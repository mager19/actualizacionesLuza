<?php
/**
 * Template name: Template Products
 *
 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header(); 

	echo do_shortcode( '[recent_products orderby="title" order="desc"]' );
	
get_footer(); ?>
