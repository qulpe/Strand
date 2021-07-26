<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
<li class="list-item">
        <div id="page-kontakt">

            <div id="contact-form">
                <?php dynamic_sidebar('contact-form') ?>
                <div id="contact-title">
                    <h1>Skriv til os</h1>
                    <p> <?php the_field('reply'); ?></p>
                </div>
            </div>
            
            <div id="contact-info">
                <h1>Kontaktinformationer</h1>
               <p> <?php the_field('address'); ?></p>
               <p> <?php the_field('phone'); ?></p>
               <p> <?php the_field('email'); ?></p>
             
            </div>

        </div>
</li>
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>