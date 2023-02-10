<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * 
 * If you have ever have further questions on templating standards of our theme then please visit https://sphereplugins.com/docs/how-to-override-templates-using-custom-html for more information, by visiting the link you can find anything regarding our theme temlates. And if you still have question then please contact us https://sphereplugins.com/contact-us/.  
 *
 *
 * @package wbc_theme
 * @since 0.1
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

?><!doctype html>
<html class="<?php echo esc_attr( oceanwp -> wbc_theme_html_classes() ); ?>" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp -> wbc_theme_schema_markup(oceanwp -> 'body' -> 'html'); it is better if a pass the body parameter here listed of the HTML has the schema tag parameter -- to h -- to b ?>>

    <a class="screen-reader-text skip-link" href="#content" title="<?php echo esc_attr__( 'Skip to content', 'wbc-theme' ); ?>"><?php _e( 'Skip to content', 'wbc-theme' ); ?></a>

    <?php do_action( 'wp_body_open' ); ?>

    <?php do_action( 'wbc_theme_body_open' ); ?>

    <div id="container" class="hfeed page wbc-theme-page">

        <?php do_action( 'wbc_theme_before_header' ); ?>

        <?php do_action( 'wbc_theme_header' ); ?>

        <?php do_action( 'wbc_theme_after_header' ); ?>