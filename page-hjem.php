<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>


        <div id="updated-hero">

            <div id="fqfq">
                <h1>Explore Denmark's beaches</h1>
            </div>

            <div id="shape-container">
                <div class="cover"></div>

                <div id="trapezoid">

                </div>

                <div class="cover"></div>
            </div>
        </div>

        <div id="hero-container">
            <div id="left-hero">
                <h1>
                    <?php the_field('second-title'); ?>
                </h1>
                <p>
                    <?php the_field('first-paragraph'); ?>
                </p>
                <div id="small-announcement">
                    <h2>
                        <?php the_field('third-title'); ?>
                    </h2>

                    <p>
                        <?php the_field('second-paragraph'); ?>
                    </p>

                    <?php
                    $image = get_field('download');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="download-button" />
                    <?php endif; ?>

                </div>
            </div>

            <div id="phone-container">
                <?php
                $image = get_field('image-phone');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="phone" />
                <?php endif; ?>
            </div>
        </div>




        <div id="last-text">
            <div>
                <h4>
                    <?php the_field('fourth-title'); ?>
                </h4>

                <p>
                    <?php the_field('fourth-paragraph'); ?>
                    <?php the_field('last-paragraph'); ?>
                </p>
            </div>
            <?php
            $image = get_field('download');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="download-button" />
            <?php endif; ?>
        </div>


<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>