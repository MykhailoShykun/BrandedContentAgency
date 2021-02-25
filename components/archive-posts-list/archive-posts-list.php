<section class="section section_archive-posts-list">
    <div class="archive-posts-list">
        <div class="main-post">
            <h1 class="title">DESIGN</h1>
            <div class="thumbnail-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/img/dest/thumbnail-sample.jpg" alt="thumbnail" class="main-post__thumbnail">
                <?php if (wpmd_is_device()) { ?>
                    <div class="button-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/new_mobile.png" alt="new" class="button__image">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/new-triangle_mobile.jpg" alt=">" class="button__triangle">
                    </div>
                <?php } else { ?>
                    <div class="button-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/new_desktop.png" alt="new" class="button__image">
                        <img src="<?= get_template_directory_uri(); ?>/img/dest/new-triangle_mobile.jpg" alt=">" class="button__triangle">
                    </div>
                <?php } ?>
            </div>
            <div class="container">
                <p class="main-post__title">Название Проекта</p>
                <p class="main-post__subtitle">Bring us your toughest business goals, your Bring us your toughest business goals, your tightest parameters.</p>
            </div>
        </div>
        <div class="container">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="post">
                    <img src="<?= get_template_directory_uri(); ?>/img/dest/thumbnail-sample.jpg" alt="thumbnail" class="post__thumbnail">
                    <a href="#" class="post__title">Название Проекта</a>
                    <p class="post__subtitle">Bring us your toughest business goals, your Bring us your toughest business goals, your tightest parameters.</p>
                </div>
            <?php } ?>
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