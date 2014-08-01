<div id="home-slider">
	
	<div class="flexslider">
		<ul class="slides">
		
			<!-- loop for the slides -->
		
			<?php query_posts('post_type=slides&posts_per_page=5'); if(have_posts()) : while(have_posts()) : the_post(); 
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");?>
			
			
			<li style="background-image: url(<?php echo $imgsrc[0]; ?>)">
				<div class="slide-header">
					
					<?php if(get_post_meta($post->ID, 'logopic', true)) { ?>
					
					<div class="slicer" style="background-image: url(<?php echo get_post_meta($post->ID, 'logopic', true); ?>);"></div>
										
					<?php } ?>
					
					
					<?php if(get_post_meta($post->ID, 'bigtitle', true)) { ?>
					
					<h2><?php echo get_post_meta($post->ID, 'bigtitle', true); ?></h2>
					
					<?php } ?>
					
					<?php if(get_post_meta($post->ID, 'littletitle', true)) { ?>
					
					<h3><?php echo get_post_meta($post->ID, 'littletitle', true); ?></h3>
					
					<?php } ?>
					
				</div>
				<!-- <img src="" alt="<?php get_post_meta($post->ID, 'bigtitle', true); ?>" /> -->
			</li>
			
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
			<!-- end loop for the slides -->
			
		</ul>
	</div>

</div>

<div class="booking-form">
	
	<div class="searchbox">
		<div class="container">
			<form action="https://murrayhillsuites.reztrip.com/search?" method="get">
				<li class="calerer">
				<input type="text"  id="arrival_date" name="arrival_date" placeholder="<?php _e('Arrival','cebolang'); ?>" class="calendarsection" />
				<input type="hidden" name="arrive" id="arv" value="">
				<span class="icon-calendar" aria-hidden="true" > </span></li>
				<li class="calerer">
				<input type="text"  id="departure_date" name="departure_date" placeholder="<?php _e('Departure','cebolang'); ?>" class="calendarsection" />
				<input type="hidden" name="depart" id="dep" value="">
				<span class="icon-calendar" aria-hidden="true"></span></li>
				<li class="select"><select name="adult">
					<option value="1" selected="selected">1 Adult</option>
					<option value="2">2 Adults</option>
					<option value="3">3 Adults</option>
					<option value="4">4 Adults</option>
					<option value="5">5 Adults</option>
					<option value="6">6 Adults</option>
					<option value="7">7 Adults</option>
					<option value="8">8 Adults</option>
					<option value="9">9 Adults</option>
					<option value="10">10 Adults</option>
				</select></li>
				<input type="hidden" value="19288" name="Hotel">
				<input type="hidden" value="7576" name="Chain">
				<input type="hidden" value="availresults" name="start">
				<li class="last"><input type="submit" value="See Our Availability" class="button"></li>
				
				<div class="clear"></div>

				<div class="ressys">
				
					<div class="calendars">
							
						 <div class="datepicker"></div>
						
					</div>
					
				</div>

			</form>

		</div>
	</div>

</div>
