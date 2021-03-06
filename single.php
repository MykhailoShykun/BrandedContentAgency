<?php get_header();
$post_id = get_the_ID();
$gallery = acf_photo_gallery('single-gallery',$post_id);
$videos = get_post_meta($post_id, 'wpcf-single-video');
?>
<main class="main">
	<section class="section section_thumbnail">
        <?= get_the_post_thumbnail( $post_id, 'medium', array('class'=>'single__thumbnail') ); ?>
        <h1 class="single__title"><?= get_the_title($post_id); ?></h1>
        <a href="<?= get_page_link(32); ?>" class="single-return-button__wrapper display-on-mobile">
            <img src="<?= get_template_directory_uri(); ?>/img/dest/single-close.svg" alt="close" class="single-return-button">
        </a>
    </section>
    <section class="section section_single-content">
        <?php if(!empty($gallery) or !empty($videos[0])) { ?>
        <div class="swiper-container__wrapper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
			        <?php foreach ($gallery as $photo) { ?>
                        <a href="<?= $photo['full_image_url']; ?>" data-lightbox="gallery-<?= $photo['id'] ?>" class="swiper-slide">
                            <img src="<?= $photo['full_image_url']; ?>" alt="image"
                                 class="swiper-image">
                        </a>
			        <?php } foreach ($videos as $video) {
			            if (!empty($video)) { ?>
                    <div class="swiper-slide swiper-slide_video">
                        <div class="play-button-wrapper">
                            <img src="<?= get_template_directory_uri(); ?>/img/dest/play.svg" alt="play" class="play-button">
                            <img src="<?= get_template_directory_uri(); ?>/img/dest/play-triangle.svg" alt=">" class="play-button__triangle
                            play-button__triangle_mobile">
                        </div>
                        <video class="swiper-video" autoplay muted loop playsinline>
                            <source src="<?= $video ?>" type="video/mp4" />
                        </video>
                    </div>
                    <?php } } if (wpmd_is_notdevice()) { ?>
                        <div class="swiper-slide"></div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination_desktop"></div>
            <div class="swiper-navigation swiper-navigation_desktop">
                <img id="prev-desktop" src="<?= get_template_directory_uri(); ?>/img/dest/arrow.svg" alt="arrow" class="swiper-navigation__arrow
                swiper-navigation__arrow_prev">
                <img id="next-desktop" src="<?= get_template_directory_uri(); ?>/img/dest/arrow.svg" alt="arrow" class="swiper-navigation__arrow
                swiper-navigation__arrow_next">
            </div>
        </div>
        <?php } ?>
        <div class="container">
	        <?php if(!empty($gallery) or !empty($videos[0])) { ?>
                <div class="swiper-pagination display-on-mobile swiper-pagination_mobile"></div>
                <div class="swiper-navigation swiper-navigation_mobile">
                    <img id="prev-mobile" src="<?= get_template_directory_uri(); ?>/img/dest/arrow.svg" alt="arrow" class="swiper-navigation__arrow
                swiper-navigation__arrow_prev">
                    <img id="next-mobile" src="<?= get_template_directory_uri(); ?>/img/dest/arrow.svg" alt="arrow" class="swiper-navigation__arrow
                swiper-navigation__arrow_next">
                </div>
            <?php } ?>
            <div class="single__text-block">
                <a href="<?= get_page_link(32); ?>" class="single-return-button__wrapper">
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
