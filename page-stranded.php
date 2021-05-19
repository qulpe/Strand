<?php
/*
Template Name: Blog posts template
*/
$blog_posts = new WP_Query(array('post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1));
get_header();
?>
<div class="page-container">
    <div class="main-content">
        <?php if ($blog_posts->have_posts()) : ?>
            <div class="blog-posts">
                <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail(get_the_ID(), 'full');
                            } ?>
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                    </article>

                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p class="no-blog-posts">
                <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?>
            </p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
    <div id="categories">
        <?php dynamic_sidebar('categories'); ?>
    </div>
</div>

<?php get_footer(); ?>