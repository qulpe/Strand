<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<div id="page-kontakt">
    <?php dynamic_sidebar('contact-form')?>
    <?php the_field('kontakt-info'); ?>
    </div>
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>