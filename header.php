<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		<meta name="theme-color" content="#294172">

		<title><?php wp_title('|', true, 'right'); ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?" />
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

		<?php wp_head(); ?>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<?php $post_pre_loop = $wp_query->post;
		if (!is_front_page()) {
			echo '<meta property="og:image" content="' . get_the_post_thumbnail_url($post_pre_loop->ID,'post-image') . '" />';
		}
		?>
	<meta name="google-site-verification" content="Z5SG3FczCb1JKEDIOGdCrLA94L1EMrgaaVqUEGvS6Nc" />
	</head>
<?php if (is_front_page()) { ?>
<style>
.post-meta {
	font-size: 0px;
}
</style>
<?php } ?>
	<body <?php body_class(); ?>>
		<div class="header section small-padding bg-dark bg-image">
			<div class="cover"></div>

			<div class="header-search-block bg-graphite hidden">

				<?php get_search_form(); ?>

			</div> <!-- /header-search-block -->

			<div class="header-inner section-inner">
				<div class="header-img">
					<a href="<?php echo get_site_url(); ?>"><img width="200px" src="<?php echo get_site_url(); ?>/wp-content/themes/mojefedoracz/images/mojefedora.png"></a>
				</div>
				<div class="header-right">
                    <a class="socialbuttons facebook" href="http://www.facebook.com/fedoracz">
					    <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="socialbuttons twitter" href="http://twitter.com/fedoracz">
                        <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="socialbuttons google" href="https://plus.google.com/110833706720326361343">
                        <i class="fa fa-fw fa-google-plus" aria-hidden="true"></i>
                    </a>
                    <a class="socialbuttons rss" href="feed/">
                            <i class="fa fa-fw fa-rss" aria-hidden="true"></i>
                    </a>

					<div class="header-search wrapper">
						<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" value="" placeholder="<?php _e('Search form', 'baskerville'); ?>" name="s" class="s" />
							<input type="submit" class="searchsubmit" value="<?php _e('Search', 'baskerville'); ?>">
						</form>
					</div>
			</div>

			</div> <!-- /header-inner -->

		</div> <!-- /header -->

<div class="navigation section no-padding bg-dark">

			<div class="navigation-inner section-inner">

				<div class="nav-toggle fleft hidden">

					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>

					<div class="clear"></div>

				</div>

				<ul class="main-menu">

					<?php if ( has_nav_menu( 'primary' ) ) {

						wp_nav_menu( array(

							'container' => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
							'walker' => new baskerville_nav_walker

						) ); } else {

						wp_list_pages( array(

							'container' => '',
							'title_li' => ''

						));

					} ?>

				 </ul> <!-- /main-menu -->

				 <div class="clear"></div>

			</div> <!-- /navigation-inner -->

		</div> <!-- /navigation -->

		<div class="mobile-navigation section bg-graphite no-padding hidden">

			<ul class="mobile-menu">

				<?php if ( has_nav_menu( 'primary' ) ) {

					wp_nav_menu( array(

						'container' => '',
						'items_wrap' => '%3$s',
						'theme_location' => 'primary',
						'walker' => new baskerville_nav_walker

					) ); } else {

					wp_list_pages( array(

						'container' => '',
						'title_li' => ''

					));

				} ?>

			 </ul> <!-- /main-menu -->

		</div> <!-- /mobile-navigation -->
<?php
$_SESSION['used'] = array(); // Reset session variable on load
?>
