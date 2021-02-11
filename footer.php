<footer class="footer">

</footer>
<?php if (is_front_page()) { ?>
    <script src="<?= get_template_directory_uri(); ?>/components/front-page-intro/front-page-intro.js"></script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>