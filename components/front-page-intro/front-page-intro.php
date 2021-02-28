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
                <source src="<?= get_field('front-video', $post_id) ?>" type="video/mp4" />
            </video>
            <div class="play-button-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/img/dest/play.svg" alt="play" class="play-button play-button_desktop">
                <img src="<?= get_template_directory_uri(); ?>/img/dest/play-triangle.svg" alt=">" class="play-button__triangle play-button__triangle_mobile">
            </div>
        </div>
        <?php if (!empty(get_the_content($post_id))) { ?>
        <div class="container">
            <div class="text-block">
                <?= get_the_content($post_id); ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>