<?php
$posts = get_field('front-works', $post_id);
if (!empty($posts)) {
?>
<section class="section section_front-page-what-we-do">
    <div class="front-page-what-we-do">
        <div class="container">
            <h2 id="whatWeDoTitle" class="title"><b>что</b><br><b>мы делаем?</b></h2>
        </div>
        <ul class="posts-list">
            <?php foreach ($posts as $post) {
                $id = strval($post->term_id);
                $cat = 'category_' . $id;
                $thumbnail = get_field('category-thumbnail', $cat);
                ?>
                <li class="posts-list__item">
                    <div class="thumbnail-wrapper">
                        <?php if (!empty($thumbnail)) { ?>
                        <img src="<?= $thumbnail ?>" alt="thumbnail" class="thumbnail">
                        <a href="<?= get_category_link($post->term_id) ?>" class="button-wrapper">
                            <span class="button-wrapper__inner">
                                <img src="<?= get_template_directory_uri(); ?>/img/dest/enter.svg" alt="more" class="button__image">
                            </span>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="container">
                        <h6 class="item__title"><?= $post->name ?></h6>
                        <div class="item__subtitle"><?= category_description($post->term_id) ?></div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php } ?>