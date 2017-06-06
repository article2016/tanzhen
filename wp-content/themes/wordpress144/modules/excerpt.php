<?php if( dopt('d_adindex_02_b') ) printf('<div class="banner banner-sticky">'.dopt('d_adindex_02').'</div>'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="excerpt">
	<div class="focus"><a href="<?php the_permalink(); ?>" class="thumbnail"><?php deel_thumbnail(); ?></a></div>
	<header>
	
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?> - <?php bloginfo('name'); ?>"><?php the_title(); ?></a></h2>
	</header>
	<p class="note"><?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 120, '...'); ?></p>
		<p>
	<?php if( !is_author() ){ ?>
		<span class="muted"><i class="icon-user icon12"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><?php echo get_the_author() ?></a></span>
	<?php } ?>
	<span class="muted"><i class="icon-time icon12"></i> <?php if(is_home()) the_time('m-d'); else the_time('Y-m-d'); ?></span>
	<span class="muted"><i class="icon-eye-open icon12"></i> <?php deel_views('浏览'); ?></span>
	<span class="muted"><i class="icon-comment icon12"></i> <?php 
			if ( comments_open() ) echo '<a href="'.get_comments_link().'">'.get_comments_number('0', '1', '%').'评论</a>';
		?></span></p>
</article>
<?php endwhile; wp_reset_query(); ?>
<?php deel_paging(); ?>