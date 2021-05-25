<?php
/*
Template Name: Blog posts template
*/
$blog_posts = new WP_Query(array('post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1));
get_header();
?>
<div class="page-container">
    <div class="main-content">
        <h1 class="post-page-title">Things on the beach</h1>
        <a href="#" ><h3 id="category-toggle">Kategori <p id="toggle-arrow"> &larr; </p></h3> </a>
    <?php dynamic_sidebar('posts'); ?>
    </div>
     
    <div id="categories">
        <?php dynamic_sidebar('categories'); ?>
    </div>
</div>

<?php get_footer(); ?>