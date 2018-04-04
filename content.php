<?php if ( has_post_thumbnail() ) { ?>

		<div class="featured-media">

			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">

				<?php the_post_thumbnail('post-thumbnail'); ?>

			</a>

		</div> <!-- /featured-media -->

	<?php }
	else { ?>
	<div class="featured-media">

			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fedora.jpg" class="attachment-post-thumbnail wp-post-image" alt="article_image" width="600" height="254">
			</a>

		</div>
		<?php } ?>



<div class="post-header">

    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

</div> <!-- /post-header -->

<div class="post-excerpt">

	<?php the_excerpt('100'); ?>

</div> <!-- /post-excerpt -->

<div class="post-meta">

	<a class="post-date" href="#"><?php coauthors_posts_links(null, null, null, null, true); ?></a> <a class="post-date" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_time( 'F j, Y' ); ?></a>

	<?php

		if( function_exists('zilla_likes') ) zilla_likes();

		if ( comments_open() ) {
			comments_popup_link( '0', '1', '%', 'post-comments' );
		}

		/*edit_post_link();*/

	?>

	<div class="clear"></div>

</div>

<div class="clear"></div>
