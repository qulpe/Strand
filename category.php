<?php

/**
 * Category Page Template
 */

get_header(); ?>

<?php
if (have_posts()) : ?>
    <li class="list-item">
        <div id="stranded-hero">
            <h1> <?php single_cat_title('', true); ?> </h1>
    </li>
    <div id="categories">
        <?php dynamic_sidebar('categories'); ?>
    </div>

    <?php
    while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="list-item">
            <div class="post-link">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail(get_the_ID(), 'full');
                } ?>
                <div class="title-cat">
                    <h2 class="post-title"><?php the_title(); ?> </h2>

                    <h2 class="category-stranded"> <?php the_category(); ?> </h2>
                </div>
                <p> <?php the_content(); ?> </p>
            </div>
        </article>
    <?php endwhile;

else : ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<script>
    <?php include('stranded.js'); ?>
</script>

<?php get_footer(); ?>