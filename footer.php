<?php

/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>
<?php do_action('avada_after_main_content'); ?>

</div> <!-- fusion-row -->
</main> <!-- #main -->
<?php do_action('avada_after_main_container'); ?>


<footer id="footer">

    <div id="footer-items-wrapper-logo">
        <?php dynamic_sidebar('footer-1'); ?>
    </div>

    <div class="footer-container">
        <div id="footer-items-wrapper">
            <?php dynamic_sidebar('footer-2'); ?>
        </div>

        <div id="footer-items-wrapper-2">
            <?php dynamic_sidebar('footer-3'); ?>
        </div>

        <div id="footer-items-wrapper">
            <?php dynamic_sidebar('footer-4'); ?>
        </div>
    </div>

</footer>

<div class="copyright">© Copyright 2019 Stranddetektor.dk | Alle rettigheder forbeholdes | Udviklet af Grumsen Development ApS</div>

<div class="avada-footer-scripts">
    <?php wp_footer(); ?>
</div>

<?php get_template_part('templates/to-top'); ?>
</body>

</html>