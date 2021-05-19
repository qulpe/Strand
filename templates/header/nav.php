<!-- TEMPLATE PART FOR NAVIGATION  -->

<!-- DESKTOP NAVIGATION  -->

<nav class="navigation-desktop">
    <a href="/stranddetektor/hjem">
        <div id="logo"></div>
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
        <span class="trig"></span>
        <span class="trigon"></span>
        <span class="trigor"></span>
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
<script async>
    <?php include('nav.js') ?>
</script>