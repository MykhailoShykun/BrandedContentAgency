<?php
/*
Template Name: О нас
*/
?>
<?php
$post_id = get_the_ID();

get_header(); ?>
<main class="main">
    <section class="section section_about">
        <div class="container">
            <div class="blob-wrapper">
                <h1 class="title">О нас</h1>
                <div class="tk-blob" style="--fill: rgba(255, 255, 255); --time: 10s; --amount: 10;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 747.2 726.7">
                        <path d="M539.8 137.6c98.3 69 183.5 124 203 198.4 19.3 74.4-27.1 168.2-93.8 245-66.8 76.8-153.8 136.6-254.2 144.9-100.6 8.2-214.7-35.1-292.7-122.5S-18.1 384.1 7.4 259.8C33 135.6 126.3 19 228.5 2.2c102.1-16.8 213.2 66.3 311.3 135.4z"></path>
                    </svg>
                </div>
            </div>
            <hr class="horizontal-line">
            <div class="text-block">
                <?= get_the_content($post_id) ?>
            </div>
        </div>
        <div class="marquee">
            <div class="marquee__inner">
			    <?php for ($i = 0; $i < 50; $i++) { ?>
                    <div class="marquee__item">услуги</div>
                    <div class="marquee__circle"></div>
			    <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="text-block">
		        <?= get_field('services', $post_id) ?>
            </div>
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
    </section>
</main>
<?php get_footer(); ?>