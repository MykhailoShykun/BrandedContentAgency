<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <a href="<?= home_url() ?>" class="logotype-wrapper">
            <img src="<?php
		    $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), array(45, 45) );
		    echo $custom_logo__url[0];
		    ?>" alt="logotype" class="logotype">
        </a>
        <div class="right-side">
            <a href="#" class="start-project">начать проект</a>
            <div class="hamburger">
                <span class="hamburger__span"></span>
                <span class="hamburger__span"></span>
                <span class="hamburger__span"></span>
            </div>
        </div>
    </div>
</header>
<script>
    let themePath = '<?= get_template_directory_uri() ?>';
</script>


