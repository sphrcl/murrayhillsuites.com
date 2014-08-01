<?php
/**
 * The template for displaying the footer.
 *
**/
?>

	

<footer>

		<div class="footer-nav container">

			<nav>
		
				<ul class="fl footling">
					 <?php wp_nav_menu( array( 'theme_location' => 'footer' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
				</ul>

				<ul class="social-buttons fr">

					<?php if(get_option('cebo_twitter')) { ?>
					
						<li class="twitter"><a href="http://twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>
				
					<?php if(get_option('cebo_facebook')) { ?>
					
						<li class="facebook"><a href="http://facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i><span>facebook</span></a></li>
						
					<?php } ?>
					
					<?php if(get_option('cebo_instagram')) { ?>

						<li class="instagram"><a href="http://instagram.com/<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i><span>instagram</span></a></li>

					<?php } ?>
					
					<?php if(get_option('cebo_youtube')) { ?>
					
						<li class="youtube"><a href="http://youtube.com/<?php echo get_option('cebo_youtube'); ?>" target="_blank"><i class="fa fa-youtube fa-2x"></i><span>youtube</span></a></li>
					
					<?php } ?>
				</ul>

			</nav>

			<div class="socialize">

			<?php if(get_option('cebo_address')) { ?>
				<?php } ?>

					<?php if(get_option('cebo_address')) { ?>
				<i class="fa fa-map-marker fa-lg"></i><?php echo get_option('cebo_address'); ?>
					<?php } ?>
				

					<?php if(get_option('cebo_tele')) { ?>
				<i class="fa fa-mobile-phone fa-lg"></i><?php echo get_option('cebo_tele'); ?> <?php if(get_option('cebo_fax')) { ?>| Fax: <?php echo get_option('cebo_fax'); ?><?php } ?>
					<?php } ?>
				

					<?php if(get_option('cebo_email')) { ?>
				<i class="fa fa-envelope fa-lg"> </i><a href="mailto:<?php echo get_option('cebo_email'); ?>"><?php echo get_option('cebo_email'); ?></a>
					<?php } ?>

			</div>
				
		</div>		

		<div id="footer-details">
			<div class="container">
			
		
			</div>
		</div>

	</footer>

<?php wp_footer(); ?>
	
<!-- <div id="fb-root"></div> -->
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
</body>
</html>