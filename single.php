<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage motaphoto
 * @since 1.0
 */

get_header();
get_template_part( 'single-photo' );
get_footer();

/*
get_header();  <!-- Inclut le fichier d'en-tête du thème (header.php) -->

get_template_part( 'single-photo' );  <!-- Inclut un fichier de template spécifique pour afficher le contenu d'un article (single-photo.php) -->

get_footer();  <!-- Inclut le fichier de pied de page du thème (footer.php) -->
?>*/
