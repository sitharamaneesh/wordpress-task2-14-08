<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'automobile_chld_thm_cfg_locale_css' ) ) :
	function automobile_chld_thm_cfg_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'automobile_chld_thm_cfg_locale_css' );

if ( ! function_exists( 'automobile_chld_thm_cfg_parent_css' ) ) :
	function automobile_chld_thm_cfg_parent_css() {
		wp_enqueue_style( 'automobile_chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'twentytwenty-print-style', 'bootstrap-min-css', 'animate-css', 'font-awesome-min-css', 'Swiper-min-css', 'owl-carousel-css', 'odometer-css', 'bxslider-css', 'switcher-css', 'avantex-skin-default' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'automobile_chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// Check if plugin Active.
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( is_plugin_active( 'avantex-companion/avantex-companion.php' ) ) {
	function avantex_automobile_set_plugins_mods() {
		set_theme_mod( 'avantex-services-image', AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/auto_service_back.png' );
		// set_theme_mod( 'avantex-callout-image', AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/callout/auto-slide2.jpg' );
	}
	add_action( 'after_switch_theme', 'avantex_automobile_set_plugins_mods' );
}

function avantex_automobile_set_theme_mods() {

	set_theme_mod( 'avantex_slider_overlay_color', 'rgba(0,0,0,0)' );
	set_theme_mod( 'avantex-styling-primary-color', '#54010b' );
	set_theme_mod( 'avantex-styling-dark-color', '#0f0d1d' );
	set_theme_mod( 'avantex-services-title-color', '#000' );
	set_theme_mod( 'avantex-services-description-color', '#000' );
	set_theme_mod( 'avantex-services-background-opacity', '100' );
	set_theme_mod( 'avantex-portfolio-size', 'container' );
	set_theme_mod( 'avantex-portfolio-title', 'PROJECT GRID' );
	set_theme_mod( 'avantex-portfolio-subtitle', 'Checkout what we are doing!' );
	set_theme_mod( 'avantex-portfolio-description-color', '#000' );
	set_theme_mod( 'avantex-callout-title', 'AUTONOMOUS SELF DRIVING' );
	set_theme_mod( 'avantex-callout-subtitle', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.' );
	set_theme_mod( 'avantex-callout-description-color', '#FFF' );
	set_theme_mod( 'avantex-team-size', 'container' );
	set_theme_mod( 'avantex-team-title-color', '#000' );
	set_theme_mod( 'avantex-team-description-color', '#000' );
	set_theme_mod( 'avantex-news-title-color', '#000' );
	set_theme_mod( 'avantex-news-description-color', '#000' );
	set_theme_mod( 'avantex-sponsors-title-color', '#000' );
	set_theme_mod( 'avantex-sponsors-description-color', '#000' );
}
add_action( 'after_switch_theme', 'avantex_automobile_set_theme_mods' );
