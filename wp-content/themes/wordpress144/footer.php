</section>

<?php wp_reset_query(); if ( is_home()) { ?>
	<div class="IndexLinkListWrap">
		<div class="moketitle" style="font-size: 15px;">友情链接</div>
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=24'); ?>
		</ul>
	</div>
<?php } ?>


<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
            <a href="http://www.wafen.cn/" title="挖坟网"><strong>挖坟网</strong></a>版权所有！ &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<?php
global $dHasShare; 
if($dHasShare == true){ 
    echo '<script id="bdshare_js" data="type=tools&amp;uid='.(dopt('d_bdshare')?dopt('d_bdshare'):13688).'" ></script><script id="bdshell_js"></script><script>document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();</script>';
} 
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>