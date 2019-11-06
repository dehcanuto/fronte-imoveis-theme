<?php 
/**
 * Template Name: Empreendimentos
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fronte Imoveis Theme
 * @since 1.0
 * @version 1.0
 */

get_header();

get_template_part( 'inc/empreendimentos/part', 'header' );

get_template_part( 'inc/empreendimentos/part', 'flow' );

get_template_part( 'inc/geral/part', 'contato-especialistas' );

get_template_part( 'inc/geral/part', 'newsletter' );

get_footer();

?>