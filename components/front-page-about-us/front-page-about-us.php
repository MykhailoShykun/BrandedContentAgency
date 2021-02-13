<section class="section section_front-page-about-us">
    <div class="front-page-about-us">
        <div class="marquee">
            <div class="marquee__inner">
	            <?php for ($i = 0; $i < 50; $i++) { ?>
                    <div class="circle"></div>
	            <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="text-block">
            <hr>
                With krug agency, your dream goes far beyond the limits of the imagination. With unequalled passion we break new ground to make a moment last a lifetime. With dazzling stories, technology, and artistry, we connect people and emotions to places.
            </div>
            <a href="#" class="button-wrapper">
	            <?php if (wpmd_is_device()) { ?>
                    <img src="<?= get_template_directory_uri(); ?>/img/dest/more-about-us_mobile.png" alt="more about us" class="button__image">
	            <?php } else { ?>
                    <img src="<?= get_template_directory_uri(); ?>/img/dest/more-about-us_desktop.png" alt="more about us" class="button__image">
	            <?php } ?>
            </a>
        </div>
        <div class="marquee">
            <div class="marquee__inner">
			    <?php for ($i = 0; $i < 50; $i++) { ?>
                    <div class="circle"></div>
			    <?php } ?>
            </div>
        </div>
    </div>
</section>