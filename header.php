<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo" &#8212; "; bloginfo('description'); } ?></title>

	<!-- CSS concatenated and minified via ant build script-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/import.css" type="text/css" media="screen" />
	<!-- end CSS-->
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
	<script type="text/javascript" src="http://use.typekit.com/giw3cfb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-12384867-4']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();	
	</script>
</head>
<body class="custom">

<div id="container"><!--closed in footer-->
<div id="page"><!--closed in footer-->
	<div id="header">
		<div id="head-typography"><a href="<?php bloginfo('url'); ?>"<?php if (is_home()) echo(' rel="nofollow"'); ?>><img src="<?php bloginfo('stylesheet_directory'); ?>/images/aether9_typography.gif" alt="aether9 title"/></a>
		</div>
		<div id="head-img"><a href="<?php bloginfo('url'); ?>"<?php if (is_home()) echo(' rel="nofollow"'); ?>><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mabuse_hands.jpg" alt="aether-seance"/></a>
		</div>
	</div><!--#header-->

	<div id="menu">
	<!-- Menu start -->
		<ul id="menu">
			<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order'); ?>
		</ul>
	<!-- Menu end -->
	</div>