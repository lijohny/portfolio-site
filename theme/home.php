<?php
/*
*
* Template Name: home Page 
*
*/

get_header();
?>

	<section id="primary">
		<main id="main">

		<div class="relative w-full h-screen overflow-hidden video-container">
			<video autoplay muted loop id="video-background">
				<source src="/wp-content/themes/developer-lijo/theme/assets/1851190-uhd_3840_2160_25fps.mp4" type="video/mp4">
			</video>
			<div class="absolute top-0 left-0 z-10 w-full h-full bg-black opacity-80"></div> <!-- Overlay -->
			<div class="absolute z-30 text-center text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
				<h1 class="mb-4 text-4xl">Your Content Here</h1>
				<p class="text-lg">This content will appear on top of the video.</p>
			</div>
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();