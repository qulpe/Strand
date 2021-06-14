<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
	the_category();
	if (has_post_thumbnail()) {
		the_post_thumbnail(get_the_ID(), 'full');
	}
	the_title();
	the_content();

// Previous/next post navigation.


endwhile; // End of the loop.

get_footer();
