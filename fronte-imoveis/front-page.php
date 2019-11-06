<?php 
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

get_template_part( 'inc/home/part', 'banner' );

get_template_part( 'inc/home/part', 'oferta' );

get_template_part( 'inc/geral/part', 'depoimentos' );

get_template_part( 'inc/home/part', 'ofertas-flow' );

get_template_part( 'inc/home/part', 'blog-flow' );

get_template_part( 'inc/geral/part', 'contato-especialistas' );

get_template_part( 'inc/home/part', 'instagram' ); // Instagram feed plugin

get_template_part( 'inc/geral/part', 'clientes' );

get_template_part( 'inc/geral/part', 'newsletter' );

get_footer();

?>