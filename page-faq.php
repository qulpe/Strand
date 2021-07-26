<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
<li class="list-item">
        <div id="faq-hero">
<!--             
            <h2>
                <?php the_field('first-title'); ?>
            </h2> -->

            <p>
                <?php the_field('first-paragraph'); ?>
            </p>

            <p>
                <?php the_field('first-list'); ?>
            </p>

            <p>
                <?php the_field('second-paragraph'); ?>
            </p>
        </div>
        </li>
<li class="list-item">
        <div id="faq">
            <h1>
                <?php the_field('last-title'); ?>
            </h1>

            <p>
                <?php the_field('q-and-a'); ?>
            </p>
        </div>
        </li>

<?php endwhile;
else :
    echo '<p>no content found</p>';

endif;

get_footer(); ?>