<?php
/**
 * @package Freak
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 grid freak'); ?>>

		<div class="featured-thumb col-md-5 col-sm-4">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('freak-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img alt="<?php the_title() ?>" src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
			<?php endif; ?>
			<div class="postedon">
				<div class="date"><?php echo get_the_date('M j'); ?></div>
				<div class="author"><?php the_author_posts_link() ?></div>
			</div>	
		</div><!--.featured-thumb-->
			
		<div class="out-thumb col-md-7 col-sm-8">
			<header class="entry-header">
				<h3 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<span class="entry-excerpt"><?php the_excerpt(); ?></span>
				<span class="readmore"><a class="hvr-underline-from-center" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','freak'); ?></a></span>
			</header><!-- .entry-header -->
		</div><!--.out-thumb-->
			
		
		
</article><!-- #post-## -->