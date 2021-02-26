<?php
$menuItems = wp_get_nav_menu_items( 'navigation' );
$currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
<div class="overlay-menu">
    <nav class="overlay-menu__nav">
        <?php foreach ($menuItems as $item) { ?>
            <a href="<?= $item->url ?>" class="overlay-menu__link <?php if ($item->url === $currentPageUrl) { ?>overlay-menu__link_current<?php }
            ?>"><?= $item->title ?></a>
	    <?php } ?>
    </nav>
</div>