<!-- TEMPLATE PART FOR NAVIGATION  -->

<!-- DESKTOP NAVIGATION  -->

<nav class="navigation-desktop">
    <a href="/stranddetektor/hjem">
        <div id="logo"><?php dynamic_sidebar('navbar-logo') ?></div>
    </a>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'desktop-navigation',
            'menu_id' => 'desktop',
            'link_before' => '<li id="menu-desktop-item">',
            'link_after' => '</li>',
        )
    );
    ?>

</nav>

<!-- MOBILE NAVIGATION  -->

<nav class="navigation-mobile">
    <div class="trigger" onclick="displayMenu()">
        <span id="trig"></span>
        <span id="trigon"></span>
        <span id="trigor"></span>
    </div>
</nav>

<div id="pagination">

    <ul id="menu-mobile">

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'mobile-navigation',
                'menu_id' => 'menu-container',
                'link_before' => '<li class="menu-mobile-item">',
                'link_after' => '</li>',
            )
        );
        ?>
       
    </ul>

</div>

<?php 

    if(!is_page('stranded')){
        echo '<style>
        .menu-category + .menu-mobile-item{
            display: none !important;
        }
        </style>';
    }
    if( is_category()){
        echo '<style>
        .menu-category + .menu-mobile-item{
            display: block !important;
        }
        </style>';
    }

?>

<script async>
    <?php include('nav.js') ?>
</script>