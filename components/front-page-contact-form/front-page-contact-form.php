<?php
$socialsText = get_field('front-socials', $post_id);
$socialsArr = explode('|', $socialsText);
$phone = get_field('front-phone', $post_id);
$email = get_field('front-mail', $post_id);
?>
<section class="section_front-page-contact-form">
    <div class="section_animation">
        <div class="animated-circle__wrapper">
            <div class="animated-circle">
                <div class="inner-circle"></div>
            </div>
        </div>
        <div class="front-page-contact-form">
            <div class="container">
                <div class="blocks-wrapper">
                    <div class="block">
                        <h2 class="contact-form__title">Связаться с нами</h2>
						<?php echo do_shortcode('[contact-form-7 id="21" title="Контактная форма"]'); ?>
                    </div>
                    <?php if (!empty($socialsText) or !empty($email) or !empty($phone)) { ?>
                    <div class="block">
                        <?php if (!empty($socialsText)) { ?>
                        <ul class="block__inner">
                            <li class="block__item block__item_title">Соц. сети</li>
	                        <?php foreach ($socialsArr as $socialArr) {
	                            $explodedArr = explode('}}', $socialArr)
	                            ?>
                            <li class="block__item"><a href="<?= trim($explodedArr[1]) ?>" class="block__link"><?= trim($explodedArr[0]) ?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } if (!empty($phone) or !empty($email)) { ?>
                        <ul class="block__inner">
                            <li class="block__item block__item_title">Контакты</li>
	                        <?php if (!empty($phone)) { ?>
                            <li class="block__item"><a href="tel:<?= trim($phone) ?>" class="block__link"><?= trim($phone) ?></a></li>
	                        <?php } if (!empty($email)) { ?>
                            <li class="block__item"><a href="mailto:<?= trim($email) ?>" class="block__link"><?= trim($email) ?></a></li>
	                        <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <img id="contact-form" src="<?= get_template_directory_uri(); ?>/img/dest/arrow-to-the-top.svg" alt="to the top" class="return-to-the-top">
            </div>
        </div>
    </div>
</section>