<?php
/** 
 * The template for displaying portfolio items
 *
 * @package Ninograff_portfolio
 */

				$posts_per_page = get_option( 'jetpack_portfolio_posts_per_page', '5' );
				$args = array(
					'post_type'      => 'jetpack-portfolio',
					'posts_per_page' => $posts_per_page,
					'paged'          => $paged,
					'orderby'		 => 'meta_value',
					'order'			 => 'ASC',
					'meta_key'		 => 'portfolio-order',
					'tax_query'      => array(
                                  array(
                                    'taxonomy' => 'jetpack-portfolio-type',
                                    'field'    => 'slug',
                                    'terms'    => 'HOME'
                                  )
                                ),
				);
				$project_query = new WP_Query ( $args );
				if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :
			?>



<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="portfolio-wrapper">

				<?php /* Start the Loop */ ?>
				<?php query_posts('cat=2&showposts=5'); while ( $project_query -> have_posts() ) : $project_query -> the_post(); ?>

					<?php get_template_part( 'components/features/portfolio/content', 'portfolio' ); ?>

				<?php endwhile; ?>

			</div>
				<?php
					the_posts_navigation();
					wp_reset_postdata();
				?>
		</main>
	<?php get_footer(); ?>
	</div>

			<?php else : ?>

				<section class="no-results not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'ninograff_portfolio' ); ?></h1>
					</header>
					<div class="page-content">
						<?php if ( current_user_can( 'publish_posts' ) ) : ?>

							<p><?php printf( wp_kses( __( 'Ready to publish your first project? <a href="%1$s">Get started here</a>.', 'ninograff_portfolio' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php?post_type=jetpack-portfolio' ) ) ); ?></p>

						<?php else : ?>

							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ninograff_portfolio' ); ?></p>
							<?php get_search_form(); ?>

						<?php endif; ?>
					</div>
				</section>
			<?php endif; ?>
