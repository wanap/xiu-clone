<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="baidu-site-verification" content="rWDt1HEIs7" />
<title><?php $t = trim(wp_title('', false)); if($t) echo $t._hui('connector'); else ''; bloginfo('name'); if (is_home ()) echo _hui('connector').get_option('blogdescription'); if ($paged > 1) echo '-Page ', $paged; ?></title>
<link rel="icon" href="<?php echo HOME_URI.'/favicon.ico' ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo HOME_URI.'/favicon.ico' ?>">
<?php wp_head(); ?>
<!--[if lt IE 9]><script src="<?php echo THEME_URI ?>/js/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/iconfont/iconfont.css" />
</head>
<body <?php body_class( hui_bodyclass() ); ?>>
<?php if( _hui('layout') == 'ui-navtop' ){ ?>
<header class="header">
<div class="container">
<?php }else{ ?>
<section class="container">
<header class="header">
<?php } ?>
	<div class="navtop clearfix">
		<?php hui_nav_menu('navmenu', 'pc_menu'); ?>
	</div>
<?php if( _hui('layout') == 'ui-navtop' ){ ?>
</div>
</header>
<div class="container">
	<div class="screen-box">
		<div class="navcat-box cleafix">
		    <span class="hot">HOT<em class="arrow-right"></em></span>
		    <?php hui_nav_menu('navcat', 'nav'); ?>
		</div>
		<!--右边再加搜索框-->
		<div class="search-box">
			<form method="get" action="<?php echo esc_url( home_url( '/' ) )?>">
				<input class="search-input" name="s" type="text" placeholder="搜搜看看" value="<?php echo htmlspecialchars($s) ?>">
				<i class="iconfont icon-search"></i>
				<input class="search-btn" type="submit" value="搜索">
			</form>
		</div>
	</div>
</div>

<!--手机端导航-->
<div class="main-title clearfix">
    <a href="<?php echo get_bloginfo('url') ?>" class="main-logo">聚超值</a>
    <div class="search">
        <form action="<?php echo esc_url( home_url( '/' ) )?>" method="get" id="sForm">
            <span class="search_submit" onclick="javascript:document.getElementById('sForm').submit();">
                <i class="iconfont icon-search-s"></i>
            </span>
            <input type="text" placeholder="好宝贝 等你搜" name="s" value="<?php echo htmlspecialchars($s) ?>">
        </form>
    </div>
    <a id="J_expand_cat" class="main-icon" href="javascript:void(0)">
    	<i class="iconfont icon-menu"></i>
        <span>分类</span>
    </a>
</div>
<nav id="show-top-menu">
    <div class="mask" id="menu-mask"></div>
    <div class="menu-content">
    	<?php hui_nav_menu('main-cat', 'nav'); ?>
    </div>
</nav>

<section class="container">
<?php }else{ ?>
</header>
<?php } ?>