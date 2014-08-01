<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'cebolang' ), max( $paged, $page ) );
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('cebo_custom_favicon') == '') { ?>
	
	<link rel="icon" href="#" type="image/x-ico"/>
	
	<? } else { ?>
	
	<link rel="icon" href="#" type="image/x-ico"/>
	
	<? } ?>
	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('cebo_feedburner_url') <> "" ) { echo get_option('cebo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
	<!-- favicon -->
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/custom.css">

	<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.mmenu.min.js"></script>


	<!-- Fonts -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,200' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

	<!-- pinterest -->
	<meta name="p:domain_verify" content="391c65ba104fadf753c8a2f6bd514870"/>

	<!-- Jquery -->
	<?php include(TEMPLATEPATH. "/library/jquery.php"); ?>	


	<!-- Scripts -->
	<?php include(TEMPLATEPATH. "/library/scripts.php"); ?>	

	<style>
		<?php

			include(TEMPLATEPATH. "/library/inset.php");
		?>	
	</style>



	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>

	<!-- Google Code for Remarketing Tag -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 979299014;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/979299014/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- google analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53070302-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- cross domain tracking -->

<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-53070302-1']);
	_gaq.push(['_setAllowLinker', true]);
	_gaq.push(['_setDomainName', 'murrayhillsuites.com']);
	_gaq.push(['_trackPageview']);
	_gaq.push(['secondTracker._setAccount', 'UA-53070302-1']);
	_gaq.push(['secondTracker._setAllowLinker', true]);
	_gaq.push(['secondTracker._setDomainName', 'murrayhillsuites.com']);
	_gaq.push(['secondTracker._trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>

</head> 
	
<body id="oceana" <?php body_class($class); ?>>

	<div id="navigation">
		
		<div class="logo mobile">
  			<a href="http://murrayhill.wpengine.com"><img src="http://murrayhill.wpengine.com/wp-content/uploads/2014/07/mobile-logo1.jpg"></a>
  		</div>  	

		<div id="primary-nav">
	
			<div class="ress"></div>
			
			<div class="container">

				<a class="mmenu-icon" href="#menu" data-ajax="false"><i class="fa fa-bars"></i></a>
	
				<nav id="menu" class="fl">
					<ul>
						 <?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
					</ul>
				</nav>
	
			</div>	
	
		</div>

	</div>
	
	<div id="quiet"></div>
   