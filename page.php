<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	// Previous/next post navigation.


endwhile; // End of the loop.

get_footer();