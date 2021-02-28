<?php
if (is_home()) {
    $cat_id = 2;
	$title = get_the_title(32);
    if (!empty(get_field('archive-main-post', $post_id))) {
        $featuredPost = get_field('archive-main-post', $post_id);
        $mypost_Query = new WP_Query( array(
            'post_type'=>'post',
            'post_status'=>'publish',
            'orderby'=>'date',
            'cat'=>$cat_id,
            'post__not_in'=>[$featuredPost->ID]
        ));
    } else {
        $mypost_Query = new WP_Query( array(
            'post_type'=>'post',
            'post_status'=>'publish',
            'orderby'=>'date',
            'cat'=>$cat_id
        ));
        $featuredPost = $mypost_Query->posts[0];
    }
} elseif (is_archive()) {
	$cat_id = getCurrentCatID();
	$id = strval($cat_id);
	$cat = 'category_' . $id;
	$title = get_cat_name($cat_id);
	if (!empty(get_field('archive-main-post', $cat))) {
		$featuredPost = get_field('archive-main-post', $cat);
		$mypost_Query = new WP_Query( array(
			'post_type'=>'post',
			'post_status'=>'publish',
			'orderby'=>'date',
			'cat'=>$cat_id,
			'post__not_in'=>[$featuredPost->ID]
		));
	} else {
		$mypost_Query = new WP_Query( array(
			'post_type'=>'post',
			'post_status'=>'publish',
			'orderby'=>'date',
			'cat'=>$cat_id
		));
		$featuredPost = $mypost_Query->posts[0];
	}
}
?>
<section class="section section_archive-posts-list">
    <div class="archive-posts-list">
        <div class="main-post">
            <h1 class="title"><?= $title ?></h1>
            <div class="thumbnail-wrapper">
	            <?= get_the_post_thumbnail( $featuredPost->ID, 'large', array('class' => 'main-post__thumbnail')); ?>
                <a href="<?= get_permalink($featuredPost) ?>" class="button-wrapper">
                    <img src="<?= get_template_directory_uri(); ?>/img/dest/play_white.svg" alt="new" class="button__image">
                    <img src="<?= get_template_directory_uri(); ?>/img/dest/play-triangle_black.svg" alt=">" class="button__triangle">
                </a>
            </div>
            <div class="container">
                <p class="main-post__title"><?= get_the_title($featuredPost->ID); ?></p>
                <p class="main-post__subtitle"><?= get_the_excerpt($featuredPost->ID); ?></p>
            </div>
        </div>
        <div class="container">
            <?php if ($mypost_Query->have_posts()) {
                while ($mypost_Query->have_posts()) {
                    $mypost_Query->the_post(); ?>
                <div class="post">
                    <a href="<?= the_permalink(); ?>" class="thumbnail-wrapper">
	                <?= the_post_thumbnail('medium', array('class' => 'post__thumbnail')); ?>
                    </a>
                    <a href="<?= the_permalink(); ?>" class="post__title"><?= the_title(); ?></a>
                    <p class="post__subtitle"><?= get_the_excerpt($post->ID); ?></p>
                </div>
            <?php } } else { ?>
                <div class="post">
                    <p class="post__subtitle">Работ не найдено.</p>
                </div>
            <? } wp_reset_postdata();?>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/img/dest/arrow-to-the-top-grey.svg" alt="to the top" class="arrow-to-top">
        <script>
            let arrow = document.querySelector('.arrow-to-top');

            arrow.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            })
        </script>
    </div>
</section>