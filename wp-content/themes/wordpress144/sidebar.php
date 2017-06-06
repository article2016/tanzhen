<aside class="sidebar">

<div class="sidzr">
<h3 class="widget_tit">专栏热门</h3>
<div class="widgetbox">
<div class="widgetzrz">
	<ul>
		<?php $posts = get_posts( "category=17&numberposts=1" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
	<li>
		<div class="riqi"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php bloginfo('name'); ?>" class="thumbnail"><?php deel_thumbnail(); ?></a></div>
	</li>
	<?php endforeach; endif; ?>
	</ul>
</div>
<div class="widgetzry">

<dd class="tebie">月榜排行</dd>

<ul>
		<?php $posts = get_posts( "category=17&numberposts=5" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
	<li>
		<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 20, ''); ?></a>
	</li>
	<?php endforeach; endif; ?>
	</ul>

</div>

</div>
</div>

<?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sitesidebar')) : endif; 

if (is_single()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_postsidebar')) : endif; 
}
else if (is_page()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_pagesidebar')) : endif; 
}
else if (is_home()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sidebar')) : endif; 
}
else {
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_othersidebar')) : endif; 
}
?>
</aside>