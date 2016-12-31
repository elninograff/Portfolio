<?php
/**
 * The template used for displaying projects on index view
 *
 * @package Ninograff_portfolio
 */
?>


<?php   $post_id = get_the_ID(); 
		$order = get_field('portfolio-order', $post_id);
		$color = get_field('portfolio-color', $post_id);
?>
<div id="panel_<?php echo $order ?>" class="panel" data-slide="<?php echo $order-1 ?>">
<h1 class="entry-title" style="color:<?php echo $color ?>"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h1>
<p id="caption_<?php echo $order ?>" class="caption" ><?php the_field('portfolio-caption-homepage', $post_id); ?></p>
</div>
<article id="home_<?php echo $order ?>" <?php post_class(''); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="portfolio-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'ninograff_portfolio-portfolio-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<header class="portfolio-entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

		<?php echo get_the_term_list( get_the_ID(), 'jetpack-portfolio-type', '<span class="portfolio-entry-meta">', esc_html_x(', ', 'Used between list items, there is a space after the comma.', 'ninograff_portfolio' ), '</span>' ); ?>
	</header>
</article>

	

	
