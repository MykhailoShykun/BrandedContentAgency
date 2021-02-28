<?php
$posts = get_field('front-works', $post_id);
if (!empty($posts)) {
?>
<section class="section section_front-page-what-we-do">
    <div class="front-page-what-we-do">
        <div class="container">
            <h2 class="title">WHAT WE DO?</h2>
        </div>
        <ul class="posts-list">
            <?php foreach ($posts as $post) { ?>
                <li class="posts-list__item">
                    <div class="thumbnail-wrapper">
                        <?= get_the_post_thumbnail( $post->ID, 'large', array('class' => 'thumbnail')); ?>
                        <a href="<?= get_permalink($post->ID) ?>" class="button-wrapper">
                            <span class="button-wrapper__inner">
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/more-about-us.svg" alt="more about us" class="button__image">
                            </span>
                        </a>
                    </div>
                    <div class="container">
                        <h6 class="item__title"><?= $post->post_title ?></h6>
                        <p class="item__subtitle"><?= get_the_excerpt($post->ID) ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php } ?>