<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/blobz.min.css">
    <?php if (is_single()) { ?>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php } ?>
    <?php wp_head(); ?>
</head>
<body class="body">
<header class="header">
    <div class="container">
        <a href="<?= home_url() ?>" class="logotype-wrapper">
            <img src="<?php
            if (wpmd_is_device()) {
	            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), array(45, 45) );
            }
            else $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), array(85, 85) );
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
<?php get_template_part('components/overlay-menu/overlay-menu'); ?>
<script>
    let themePath = '<?= get_template_directory_uri() ?>';
</script>


