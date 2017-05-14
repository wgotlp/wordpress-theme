<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">
<link rel="shortcut icon" href="/wp-content/uploads/2009/03/favicon.ico" />
<link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="8VfAy3pkBG25JYTKzqVMutLnowJTsyhRY2d1qlybbqc" />
<style type="text/css">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
<?php if (is_page('schedule')) { ?>
	@import url( "/wp-content/themes/wgot/schedule/style.css" );
<?php } else if (is_page('program')) { ?>
	@import url( "/wp-content/themes/wgot/program-proposal/style.css" );
<?php } ?>
</style>
<?php if (!is_page('schedule')) { ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php } else { ?>
<meta name="viewport" content="width=800" />
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link media="only screen and (max-device-width: 480px)" href="/wp-content/themes/wgot/mobile.css" type="text/css" rel="stylesheet" />
<?php wp_head(); ?>
<?php if (is_page('program')) { ?>
 <script type="text/javascript" src="/wp-content/themes/wgot/program-proposal/proposal.js"></script>
 </head>
 <body onload="setMode(true, 5)">

<?php } else { ?>
<link type="text/css" href="/skin/jplayer-black-and-yellow.css" rel="stylesheet" />
 </head>
 <body>
<?php } ?>

<div id="header">
  <img src="/wp-content/themes/wgot/img/fist.png" alt="WGOT-LP tower &amp; fist logo" />
  <h1><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
  <div id="tagline"><?php bloginfo('description'); ?></div>
</div>

<div id="menu">
<ul>
  <li <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a></li>
  <?php wp_list_pages('title_li=&depth=1&exclude=6284');?>
</ul>
</div>

