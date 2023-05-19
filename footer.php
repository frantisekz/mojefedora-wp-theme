<div class="footer section medium-padding bg-graphite">

	<div class="section-inner row">

		<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>

			<div class="column column-1 one-third">

				<div class="widgets">

					<?php dynamic_sidebar( 'footer-a' ); ?>

				</div>

			</div>

		<?php else : ?>

			<div class="column column-1 one-third">

				<div class="widgets">

					<div id="search" class="widget widget_search">

						<div class="widget-content">

							<h3 class="widget-title"><?php _e( 'Search form', 'baskerville' ); ?></h3>
			                <?php get_search_form(); ?>

						</div>

	                </div>

				</div>

			</div>

		<?php endif; ?> <!-- /footer-a -->

		<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>

			<div class="column column-2 one-third">

				<div class="widgets">

					<?php dynamic_sidebar( 'footer-b' ); ?>

				</div> <!-- /widgets -->

			</div>

		<?php else : ?>

			<div class="column column-2 one-third">

				<div class="widgets">

					<div class="widget widget_recent_entries">

						<div class="widget-content">

							<h3 class="widget-title"><?php _e( 'Latest posts', 'baskerville' ); ?></h3>

							<ul>
				                <?php
									$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
										echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
									}
								?>
							</ul>

						</div>

	                </div>

				</div> <!-- /widgets -->

			</div>

		<?php endif; ?> <!-- /footer-b -->

		<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>

			<div class="column column-3 one-third">

				<div class="widgets">

					<?php dynamic_sidebar( 'footer-c' ); ?>

				</div> <!-- /widgets -->

			</div>

		<?php else : ?>

			<div class="column column-3 one-third">

				<div id="meta" class="widget widget_text">
					<div class="widget-content">

						<h3 class="widget-title"><?php _e( "Text widget", "baskerville" ); ?></h3>
						<p><?php _e( "These widgets are displayed because you haven't added any widgets of your own yet. You can do so at Appearance > Widgets in the WordPress settings.", "baskerville" ); ?></p>

					</div>
                </div>

			</div>

		<?php endif; ?> <!-- /footer-c -->

		<div class="clear"></div>

	</div> <!-- /footer-inner -->

</div> <!-- /footer -->

<div class="credits section bg-dark small-padding">
	<div class="credits-inner section-inner">
<div class="logos">
	<a href="https://floss.social/@fedoracz" rel="publisher"><i class="fab fa-mastodon" aria-hidden="true"></i></a>
	<a href="https://www.facebook.com/fedoracz"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="https://twitter.com/fedoracz"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	<a href="https://t.me/mojefedora"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
	<a href="https://www.youtube.com/channel/UCLCwHfGfcbDfs9E8lldJPQw"><i class="fa fa-youtube" aria-hidden="true"></i></a>
	<a href="/feed/"><i class="fa fa-rss" aria-hidden="true"></i></a>
	<a href="https://stats.uptimerobot.com/YWywDcDP4" target="_blank" style="border-left: 1px solid #ccc; padding-left: 20px;"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
</div>
<img width="120px" height="53px" src="<?php echo get_site_url(); ?>/wp-content/themes/mojefedoracz/images/fedora-logo.svg">
		<p class="credits-left">
    This site is not affiliated with or endorsed by the <a href="https://fedoraproject.org/">Fedora Project</a>.<br/>
    Kontakt: <a href="mailto:redakce@mojefedora.cz">redakce@mojefedora.cz</a> | <a href="https://mojefedora.cz/piste-pro-fedora-cz/">Pište pro mojefedora.cz</a><br/>
Některé materiály na těchto stránkách pocházejí z webu <a href="https://fedoramagazine.org"><strong>fedoramagazine.org</strong></a></a><br/>
    <a href="<?php echo wp_login_url( get_permalink() ); ?>"><strong>Přihlásit se</strong></a><br/>
		</p>
		<div class="clear"></div>

	</div> <!-- /credits-inner -->

</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>
