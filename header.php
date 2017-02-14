<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package renard
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'renard' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6" id="header-wrap">
						<div class="site-logo-wrap">
							<?php renard_logo(); ?>
							<div class="site-description"><?php bloginfo( 'description' ); ?></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<?php renard_follow_list(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="site-nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							</button>
                            <button class="search-toggle">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu'
									)
								);
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
                <div id="search-field" class="hide-search">
                    <form role="search" method="get" class="search-form" action="http://localhost:8888/wordpress/">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                        </label>
                    </form>
                </div>
			</div>
		</div>
	</header><!-- #masthead -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <?php do_action( 'renard_showcase_area' ); ?>
            </div>
        </div>
    </div>


	<div id="content" class="site-content">
		<div class="container">
