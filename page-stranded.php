<?php
/*
Template Name: Blog posts template
*/
$blog_posts = new WP_Query(array('post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1));
get_header();
?>

<li class="list-item">
    <div id="stranded-hero">
        <h1 class="post-page-title">Things on the beach</h1>

    </div>
</li>
<div id="categories">
    <?php dynamic_sidebar('categories'); ?>
</div>
<?php dynamic_sidebar('posts'); ?>

<?php get_footer(); ?>