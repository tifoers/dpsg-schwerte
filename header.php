<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'parts/mobile-off-canvas' ); ?>

	<?php  // do_action( 'foundationpress_layout_start' ); ?>

	<div class="header-navigation show-for-medium">
	<div class="row">
		<div class="columns small-12">
			<div class="top-bar">
				<div class="top-bar">
					<?php foundationpress_top_bar_r(); ?>
				</div>
				<div class="top-bar-right show-for-medium">
					<?php //Attribution for using a design from Freepik in the header of our website: Designed by Freepik www.freepik.com ?>
					<div class="flex-container">
						<a href="https://www.instagram.com/dpsg_schwerte/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/dist/assets/img/social/instagram.png" alt="Instagram" width="40" height="40"></a>
                    </div>
				</div>
				<div class="top-bar-right show-for-medium">
						<?php get_search_form( false ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="barba-wrapper">
  <div class="barba-container">

	<?php get_template_part('parts/subnav'); ?>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
