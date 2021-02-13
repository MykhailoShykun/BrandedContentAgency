<section class="section section_front-page-what-we-do" style="padding-bottom: 200px">
    <div class="front-page-what-we-do">
        <div class="container">
            <h2 class="title">WHAT WE DO?</h2>
        </div>
        <ul class="posts-list">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <li class="posts-list__item">
                    <div class="thumbnail-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/thumbnail-sample.jpg" alt="thumbnail" class="thumbnail">
                        <a href="#" class="button-wrapper">
                            <span class="button-wrapper__inner">
		                    <?php if (wpmd_is_device()) { ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/more-about-us_mobile.png" alt="more about us" class="button__image">
		                    <?php } else { ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/more-about-us_desktop.png" alt="more about us" class="button__image">
		                    <?php } ?>
                            </span>
                        </a>
                    </div>
                    <div class="container">
                        <h6 class="item__title">APPROACH & QUALIFICATION</h6>
                        <p class="item__subtitle">Bring us your toughest business goals, your tightest parameters. We transform them into creative ideas that serve your strategy.
                            Bring us your toughest business goals, your tightest parameters. We transform them into creative ideas that serve your strategy.</p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>