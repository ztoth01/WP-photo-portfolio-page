<?php
	$post_id = get_the_ID();
?>

<div class="scroll-nav navigation-inner2">
	<div class="logo-nav2">
		<a href="http://www.rickycastellani.com/">
			<div>
				<h1>Riccardo <br>Castellani<br> <span>Drummer</span></h1>
			</div>
		</a>

		<nav class="site-navigation" role="navigation">
		<ul>
			<li><a class="a" href="http://www.rickycastellani.com#home">Home</a></li>
			<li><a class="a" href="http://www.rickycastellani.com#about-me">About Me</a></li>
<!--			<li><a class="a" href="http://www.rickycastellani.com#next-gig">Next Gig</a></li>-->
			<li><a class="a <?php if( $post_id == "59" || $post_id == "70") echo "is-active";?>" href="http://www.rickycastellani.com#media">Media</a>
				<ul>
					<li><a class="" href="http://www.rickycastellani.com/photos">Photos</a></li>
					<li><a class="" href="http://www.rickycastellani.com/video">Videos</a></li>
				</ul>
			</li>
			<li><a class="a" href="http://www.rickycastellani.com#contact-me">Contact Me</a></li>
		</ul>
		</nav>

	</div>
</div>

