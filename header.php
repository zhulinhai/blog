<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/favicon.ico" >

<!--引入js文件-->
<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/prism/prism.js"></script>

</head>
<body>
    <div id="header">
        <div class="logoFrame">
            <img class="logo" src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="geek720"/>
        </div>
        <?php wp_page_menu(array('theme_location' => 'header-menu', 'echo' => true, 'container' => false, 'items_wrap' => '%3$s')) ?>
    </div>
