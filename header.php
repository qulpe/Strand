<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>

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
        var displayerMenu = document.getElementById('menu-mobile')

        displayerMenu.style.display = 'none'

        let toggle = false;

        function displayMenu() {
            if (!toggle) {
                displayerMenu.setAttribute('class', 'show')
                // document.querySelector('.trig').setAttribute('class', 'first')
                // document.querySelector('.trigon').setAttribute('class', 'second')
                // document.querySelector('.trigor').setAttribute('class', 'third')
            } else {
                displayerMenu.setAttribute('class', 'unshow')
                // document.querySelector('.trig').removeAttribute('class')
                // document.querySelector('.trigon').removeAttribute('class')
                // document.querySelector('.trigor').removeAttribute('class')
            }
            toggle = !toggle;
        }

        displayerMenu.addEventListener('click', function() {
            displayerMenu.removeEventListener('click',
                displayMenu,
                false
            )
        });
    </script>
    <main id="main" class="clearfix <?php echo esc_attr($main_class); ?>">
        <div class="fusion-row" style="<?php echo esc_attr($row_css); ?>">