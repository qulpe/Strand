<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <div class="basic">
            <?php dynamic_sidebar('categories'); ?>
        </div>

<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>