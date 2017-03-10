<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package single_page
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="outer">
	<header id="site-header" class="site-header">



		<div class="o-grid__item">
			<button id="c-hamburger" class="c-hamburger c-hamburger--htx">
				<span>toggle menu</span>
			</button>
		</div>



		<div id="menuW" class="menuW">
			<nav id="mainNav" class="mainNav">
				<span><a id="site-name" href="<?php echo site_url(); ?>" class="navLink site-name">Anna Olszewska</a></span>
				<ul>
					<li><a class="dropDpwn" href="#">Projects</a>
						<ul>
							<li><a class="navLink" href="<?php echo site_url(); ?>/tskaltubo">Tskaltubo</a></li>
							<li><a class="navLink" href="<?php echo site_url(); ?>/by-the-sea">By the Sea</a></li>
							<li><a class="navLink" href="<?php echo site_url(); ?>/when-summer-ends">When the Summer Ends</a></li>
						</ul>

					</li>
					<li><a class="navLink" href="<?php echo site_url(); ?>/people">People</a></li>
					<li><a class="navLink" href="<?php echo site_url(); ?>/places">Places</a></li>
					<li><a class="navLink" href="<?php echo site_url(); ?>/personal">Personal</a></li>
				</ul>
				<span><a id="info" class="info" href="#">Info</a></span>
			</nav>
		</div>
		<div id="info-box" class="info-box">
			<p>Contact:</p>
			<p><a id="mailC" class="mailC" href="mailto:anna@annaolszewska.com" target="_top">anna@annaolszewska.com</a></p>
			<p>+44(0)7999 783 415</p>
			<p>Elsewhere:</p>
			<ul>
				<li><a href="http://annaluba.tumblr.com" target="_blank">Blog</a></li>
				<li><a href="https://www.instagram.com/annaolszewska" target="_blank">Instagram</a></li>
				<li><a href="https://twitter.com/anna_olszewska" target="_blank">Twitter</a></li>
			</ul>
			<span class="tigger closeInfo" id="closeInfo"></span>
		</div>

	</header>
</div>

