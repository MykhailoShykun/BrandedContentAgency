<?php get_header();
    get_template_part('components/front-page-load/front-page-load'); ?>
<main class="main front-page overlay_white">
    <?php
    get_template_part('components/front-page-intro/front-page-intro');
    get_template_part('components/front-page-about-us/front-page-about-us');
    get_template_part('components/front-page-what-we-do/front-page-what-we-do');
    ?>
</main>
<?php get_footer(); ?>
