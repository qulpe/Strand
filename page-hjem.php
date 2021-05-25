<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h1>
            <?php the_field('second-title'); ?>
        </h1>
        <p>
            <?php the_field('first-paragraph'); ?>
        </p>

        <h2>
            <?php the_field('third-title'); ?>
        </h2>

        <p>
            <?php the_field('second-paragraph'); ?>
        </p>

        <h4>
            <?php the_field('fourth-title'); ?>
        </h4>

        <p>
            <?php the_field('fourth-paragraph'); ?>
        </p>

        <p>
            <?php the_field('last-paragraph'); ?>
        </p>

        <?php
        $image = get_field('download');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="download-button"/>
        <?php endif; ?>

        <?php
        $image = get_field('image-phone');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="phone"/>
        <?php endif; ?>

<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>