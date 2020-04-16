<div class="flex-item">
		<a class="flex-permalink" href="<?php echo get_permalink(); ?>">
			<?php if (has_post_thumbnail()) {the_post_thumbnail();} else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/media/img/SVG_fallback_image_1.svg" alt="<?php the_title(); ?>" />
			<?php }?>
			<h1><?php the_title(); ?></h1>
		</a>
</div>