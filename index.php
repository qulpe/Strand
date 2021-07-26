<?php get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
	}

} else {

echo "no content found";

}

get_footer();