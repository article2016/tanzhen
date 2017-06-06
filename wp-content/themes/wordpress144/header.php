<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8,ie=7">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title><?php wp_title('-', true, 'right'); echo get_option('blogname'); if (is_home ()) echo get_option('blogdescription'); if ($paged > 1) echo '-Page ', $paged; ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="all">
<!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script><![endif]-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<?php
$sr_1 = 0; $sr_2 = 0; $commenton = 0; 
if( is_singular() ){ 
    if( dopt('d_sideroll_b') ){ 
        $sr_1 = dopt('d_sideroll_1');
        $sr_2 = dopt('d_sideroll_2');
    }
    if( comments_open() ) $commenton = 1;
}
?>
<script>
window._deel = {
    name: '<?php bloginfo('name') ?>',
    url: '<?php echo get_bloginfo("template_url") ?>',
    rss: '<?php echo dopt('d_rss') ?>',
    maillist: '<?php echo dopt('d_maillist_b') ?>',
    maillistCode: '<?php echo dopt('d_maillist') ?>',
    commenton: <?php echo $commenton ?>,
    roll: [<?php echo $sr_1 ?>,<?php echo $sr_2 ?>]
}
</script>
<?php if( dopt('d_headcode_b') ) echo dopt('d_headcode'); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="navbar">
		<?php if( is_home() ) echo '<h1 class="logo"'.(dopt('d_logo_w')?' style="width:'.dopt('d_logo_w').'px"':'').'><a'; else echo '<a class="logo"'; ?> href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?><?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a><?php if( is_home() ) echo '</h1>'; ?>
		<ul class="nav">
			<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav', 'echo' => false)) )); ?>
		</ul>
		<div class="menu pull-right">
			<form method="get" class="dropdown search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
				<input class="search-input" name="s" type="text" placeholder=" 输入你要挖的内容"<?php if( is_search() ){ echo ' value="'.$s.'"'; } ?> autofocus="" x-webkit-speech=""><input class="btn btn-success search-submit" type="submit" value="挖一下">
				<ul class="dropdown-menu search-suggest"></ul>
			</form>
			<div class="btn-group pull-left">
				<button class="btn btn-primary" data-toggle="modal" data-target="#feed">订阅</button>
				<?php if( dopt('d_tqq_b') || dopt('d_weibo_b') || dopt('d_facebook_b') || dopt('d_twitter_b') ){ ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php 
		global $current_user; 
		get_currentuserinfo();
		$uid = $current_user->ID;
		$u_name = get_user_meta($uid,'nickname',true);
	?>
	<div class="speedbar">
		<div class="pull-right">
			<?php if(is_user_logged_in()){echo '<i class="icon-user icon12"></i> '.$u_name; echo ' &nbsp; &nbsp; <i class="icon-off icon12"></i> ';}else{echo '<i class="icon-user icon12"></i> ';}; wp_loginout(); ?>
		</div>
		<div class="toptip"><strong class="text-success">最新消息：</strong><?php echo dopt('d_tui'); ?></div>
	</div>
</header>
<section class="container">
	<?php if( dopt('d_adsite_01_b') ) echo '<div class="banner banner-site">'.dopt('d_adsite_01').'</div>'; ?>