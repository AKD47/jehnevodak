<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jehne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo('template_directory'); ?>/assets/img/icons/favicon.ico">
    <div class="preloader-wrap js-open">
        <div class="preloader">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/logo-loader.png"
                                    class="c-gif js-gif">
        </div>
    </div>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/header-logo.png" alt="logo">
    </div>
    <nav class="header__navigation">
        <a id="header-trigger" href="#" class="header__trigger">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <?= wp_nav_menu( array(
            'theme_location'  => 'top',//add menu to header
            'container'       => false,
            'menu_class'      => 'header__nav',
        ))?>
    </nav>
</header>
