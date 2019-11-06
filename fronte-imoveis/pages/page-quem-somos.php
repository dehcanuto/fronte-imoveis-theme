<?php 
/**
 * Template Name: Quem Somos
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fronte Imoveis Theme
 * @since 1.0
 * @version 1.0
 */

get_header();

get_template_part( 'inc/quem-somos/part', 'header' );

get_template_part( 'inc/quem-somos/part', 'bloco-text' );

get_template_part( 'inc/quem-somos/part', 'bloco-lr' );

get_template_part( 'inc/geral/part', 'depoimentos' );

get_template_part( 'inc/geral/part', 'clientes' );

get_template_part( 'inc/geral/part', 'newsletter' );

get_footer();

?>