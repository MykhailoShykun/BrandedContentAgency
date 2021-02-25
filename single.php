<?php get_header();
$post_id = get_the_ID();
?>
<main class="main">
	<section class="section section_thumbnail">
        <?= get_the_post_thumbnail( $post_id, 'medium', array('class'=>'single__thumbnail') ); ?>
        <h1 class="single__title"><?= get_the_title($post_id); ?></h1>
        <a href="<?= home_url(); ?>" class="single-return-button__wrapper">
            <img src="<?= get_template_directory_uri(); ?>/img/dest/single-close.svg" alt="close" class="single-return-button">
        </a>
    </section>
    <section class="section section_single-content">
        <div class="swiper-container">
            <div class="swiper-wrapper">
			    <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/thumbnail-sample.jpg" alt="image" class="swiper-image">
                    </div>
			    <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="swiper-pagination"></div>
            <div class="single__text-block">
                <?= get_the_content($post_id); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
