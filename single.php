<?php get_header();
$post_id = get_the_ID();
?>
<main class="main">
	<section class="section section_thumbnail">
        <?= get_the_post_thumbnail( $post_id, 'medium', array('class'=>'single__thumbnail') ); ?>
        <h1 class="single__title"><?= get_the_title($post_id); ?></h1>
        <a href="<?= home_url(); ?>" class="single-return-button__wrapper display-on-mobile">
            <img src="<?= get_template_directory_uri(); ?>/img/dest/single-close.svg" alt="close" class="single-return-button">
        </a>
    </section>
    <section class="section section_single-content">
        <div class="swiper-container__wrapper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
			        <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="swiper-slide">
                            <img src="<?= get_template_directory_uri(); ?>/img/dest/thumbnail-sample.jpg" alt="image" class="swiper-image">
                        </div>
			        <?php } ?>
                    <div class="swiper-slide swiper-slide_video">
				        <?php if (wpmd_is_device()) { ?>
                            <div class="play-button-wrapper">
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/play-showreel_mobile.png" alt="play" class="play-button play-button_mobile">
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/play-showreel-triangle_mobile.jpg" alt=">" class="play-button__triangle play-button__triangle_mobile">
                            </div>
				        <?php } else { ?>
                            <div class="play-button-wrapper">
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/play-showreel_desktop.png" alt="play" class="play-button play-button_desktop">
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/play-showreel-triangle_mobile.jpg" alt=">" class="play-button__triangle play-button__triangle_mobile">
                            </div>
				        <?php } ?>
                        <video class="swiper-video" autoplay muted loop playsinline>
                            <source src="http://kulik.inkdesign.studio/wp-content/uploads/2021/02/gordon.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination_desktop"></div>
        </div>
        <div class="container">
            <div class="swiper-pagination display-on-mobile swiper-pagination_mobile"></div>
            <div class="single__text-block">
                <a href="<?= home_url(); ?>" class="single-return-button__wrapper">
                    <img src="<?= get_template_directory_uri(); ?>/img/dest/single-close.svg" alt="close" class="single-return-button">
                </a>
                <?= get_the_content($post_id); ?>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/img/dest/arrow-to-the-top-grey.svg" alt="to the top" class="arrow-to-top display-on-desktop">
        <script>
            let arrow = document.querySelector('.arrow-to-top');

            arrow.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            })
        </script>
    </section>
</main>
<?php get_footer(); ?>
