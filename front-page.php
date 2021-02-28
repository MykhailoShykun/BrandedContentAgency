<?php get_header(); ?>
<main class="main">
    <?php
    $post_id = get_the_ID();
    set_query_var('post_id', $post_id);
    get_template_part('components/front-page-intro/front-page-intro');
    get_template_part('components/front-page-about-us/front-page-about-us');
    get_template_part('components/front-page-what-we-do/front-page-what-we-do');
    get_template_part('components/front-page-contact-form/front-page-contact-form');
    ?>
</main>
<?php get_footer(); ?>
