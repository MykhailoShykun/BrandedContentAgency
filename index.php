<?php get_header(); ?>
<main class="main">
	<?php
	$post_id = 32;
	set_query_var('post_id', $post_id);
	get_template_part('components/archive-posts-list/archive-posts-list');
	?>
</main>
<?php get_footer(); ?>
