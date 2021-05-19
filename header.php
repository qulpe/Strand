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

<?php get_template_part('templates/header/nav') ?>

    <main id="main" class="clearfix <?php echo esc_attr($main_class); ?>">
        <div class="fusion-row" style="<?php echo esc_attr($row_css); ?>">