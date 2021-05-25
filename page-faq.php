<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h2>
            <?php the_field('first-title'); ?>
        </h2>

        <p>
            <?php the_field('first-paragraph'); ?>
        </p>

        <p>
            <?php the_field('first-list'); ?>
        </p>

        <p>
            <?php the_field('second-paragraph'); ?>
        </p>

        <h1>
            <?php the_field('last-title'); ?>
        </h1>

        <p>
            <?php the_field('q-and-a'); ?>
        </p>

<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>