<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>
