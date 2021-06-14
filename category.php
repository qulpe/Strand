<?php

/**
 * Category Page Template
 */

get_header(); ?>

<section id="primary" class="site-content">
    <div id="content" role="main">

        <?php
        // Check if there are any posts to display
        if (have_posts()) : ?>

            <header class="archive-header">
                <h1 class="archive-title">Category: <?php single_cat_title('', false); ?></h1>
             

                <?php
                // Display optional category description
                if (category_description()) : ?>
                    <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif; ?>
            </header>

            <?php

            // The Loop
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="post-wrapper">
                        <a href="<?php the_permalink(); ?>" class="post-link">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail(get_the_ID(), 'full');
                            } ?>
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        <p> <?php the_excerpt(); ?> </p>
                        </a>
                    </article>
            <?php endwhile;

        else : ?>
            <p>Sorry, no posts matched your criteria.</p>


        <?php endif; ?>
    </div>
</section>



<?php get_footer(); ?>