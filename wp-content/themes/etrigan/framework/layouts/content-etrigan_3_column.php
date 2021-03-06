<?php
/**
 * @package Etrigan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-4 grid etrigan'); ?>>

		<div class="featured-thumb col-md-12">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('etrigan-sq-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><img alt= "<?php the_title() ?>" src="<?php echo get_template_directory_uri()."/assets/images/placeholder-sq.jpg"; ?>"></a>
			<?php endif; ?>
			
			<div class="out-thumb col-md-12">
				<header class="entry-header">
					<h2 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
			</div><!--.out-thumb-->
			
		</div><!--.featured-thumb-->
					
</article><!-- #post-## -->