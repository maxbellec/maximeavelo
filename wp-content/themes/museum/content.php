<?php
/**
 * @package Museum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //if (strpos(get_post_class(), 'category-videos')){echo "video !!!!";}
	foreach (get_post_class() as $str){
	    if($str=='category-videos'){echo "<div><img src='http://birkeys.com/staged/images/video-play.png'/ class='img-center'></div>";break;}
	    elseif ($str=='category-articles'){echo "<div><img src='http://www.foundationschurch.org/wp-content/uploads/2013/09/Notepad-Icon.png'/ class='img-center'></div>";break;}
	    elseif ($str=='category-photo'){echo "<div><img src='https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-camera-128.png'/ class='img-center'></div>";break;}
	}
	// echo "###test"
	?>
	<a href="<?php the_permalink(); ?>" rel="bookmark" class="post-link">
		<?php if ( ! is_search() ) : ?>
			<?php if ( has_post_thumbnail() ): ?>
			<div class="entry-image">
				<?php the_post_thumbnail(); ?>
			</div><!-- .entry-image -->
			<?php else: ?>
			<div class="entry-image">
				<div class="format-icon <?php echo get_post_format() ?>-icon"></div>
			</div><!-- .entry-image -->
			<?php endif; ?>
		<?php endif; ?>

		<header class="entry-header">
			<span class="read-more"><?php echo __( 'Lire l\'article', 'museum' ); ?> &rsaquo;</span>
			<?php if ( get_the_title() ) : ?>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-excerpt"><?php the_excerpt(); ?></div>
			<?php else: ?>
				<div class="entry-excerpt no-title"><?php the_excerpt(); ?></div>
			<?php endif; ?>
		</header><!-- .entry-header -->
	</a>
</article><!-- #post-## -->
