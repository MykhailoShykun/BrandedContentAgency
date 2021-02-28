<section class="section section_front-page-about-us">
    <div class="front-page-about-us">
        <div class="marquee-wrapper">
            <div class="pacman-wrapper">
                <div class="pacman__content">
                    <div class="pacman__inner">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/ghosts.svg" alt="ghosts" class="ghosts">
                        <div class="pacman-block">
                            <img src="<?= get_template_directory_uri(); ?>/img/dest/packman.svg" alt="pacman" class="pacman">
                            <div class="black-block"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="marquee">
                <div class="marquee__inner">
			        <?php for ($i = 0; $i < 50; $i++) { ?>
                        <div class="circle"></div>
			        <?php } ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-block">
            <hr>
                <div class="text-wrapper" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	                <?= get_field('front-more-about-us', $post_id) ?>
                </div>
            </div>
            <a href="<?= get_page_link(35) ?>" class="button-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/img/dest/more-about-us.svg" alt="more about us" class="button__image">
            </a>
        </div>
        <div class="marquee-wrapper">
            <div class="pacman-wrapper">
                <div class="pacman__content">
                    <div class="pacman__inner">
                        <div class="pacman-block">
                            <div class="black-block"></div>
                            <img src="<?= get_template_directory_uri(); ?>/img/dest/packman.svg" alt="pacman" class="pacman">
                        </div>
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/ghosts.svg" alt="ghosts" class="ghosts">
                    </div>
                </div>
            </div>
            <div class="marquee">
                <div class="marquee__inner">
				    <?php for ($i = 0; $i < 50; $i++) { ?>
                        <div class="circle"></div>
				    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>