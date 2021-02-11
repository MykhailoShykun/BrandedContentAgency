<section class="section section_front-page-intro">
    <div class="front-page-intro">
        <div class="container">
            <h1 class="title">
                <b>branded</b>
                <b>content</b>
                <i>agency</i>
            </h1>
        </div>
        <div class="video-wrapper">
            <video class="video" autoplay muted loop playsinline>
                <source src="http://kulik.inkdesign.studio/wp-content/uploads/2021/02/gordon.mp4" type="video/mp4" />
            </video>
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
        </div>
        <div class="container">
            <p class="text-block">We create unforgettable memories through multi-sensorial experiences. We create unforgettable memories through multi-sensorial experiences.We create unforgettable memories through multi-sensorial experiences.We create unforgettable memories through multi-sensorial</p>
        </div>
    </div>
</section>