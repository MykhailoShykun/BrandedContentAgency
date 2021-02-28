<footer class="footer <?php if (is_front_page()) { ?>footer_front-page<?php } ?>">
    <div class="container">
        <hr class="footer__horizontal-line">
        <div class="footer__inner">
            <div class="footer-block">
                <a href="https://www.inkdesign.studio/" class="footer__footprint">Made by - inkdesign.studio</a>
                <span class="footer__copyright">Krug content agency © 2021</span>
            </div>
            <div class="footer-block">
                <div class="tk-blob" <?php if (!is_front_page()) { ?>style="--fill: rgba(255, 255, 255, 0.5); --time: 10s; --amount: 10;"<?php }
                else {
                    ?>style="--fill:
                #000000; --time: 10s; --amount: 10;
"<?php } ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 747.2 726.7">
                        <path d="M539.8 137.6c98.3 69 183.5 124 203 198.4 19.3 74.4-27.1 168.2-93.8 245-66.8 76.8-153.8 136.6-254.2 144.9-100.6 8.2-214.7-35.1-292.7-122.5S-18.1 384.1 7.4 259.8C33 135.6 126.3 19 228.5 2.2c102.1-16.8 213.2 66.3 311.3 135.4z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</footer>
    <script src="<?= get_template_directory_uri(); ?>/components/overlay-menu/overlay-menu.js"></script>
<?php if (is_front_page()) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?= get_template_directory_uri(); ?>/js/front-page.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/components/front-page-intro/front-page-intro.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/components/front-page-about-us/front-page-about-us.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/components/front-page-contact-form/front-page-contact-form.js"></script>
<?php } if (is_single()) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js" integrity="sha512-6gudNVbNM/cVsLUMOb8g2b/RBqtQJ3aDfRFgU+5paeaCTtbYY/Dg00MzZq7r6RvJGI2KKtPBhjkHGTL/iOe21A==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/single.js"></script>
<?php } wp_footer(); ?>
</body>
</html>