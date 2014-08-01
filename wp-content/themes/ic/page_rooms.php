<?php 

/* Template Name: Rooms List Page

*/
 get_header(); ?>


<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="fullpic">
	<div class="slide-header">
	</div>
	<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" />


</div>

<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>

<!-- searchbox -->
		<div class="searchbox">
		<div class="container">
			<form action="#" method="get">
				<li class="calerer"><input type="text" placeholder="Arrival" id="arrival_date"><span class="icon-calendar" aria-hidden="true">
				<input type="hidden" name="arrive" id="arv" value="">
				</span></li>
				<li class="calerer"><input type="text" placeholder="Departure" id="departure_date"><span class="icon-calendar" aria-hidden="true">
				<input type="hidden" name="depart" id="dep" value="">
				</span></li>
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
			</form>
		</div>
	</div>

<!-- end searchbox -->


	<div id="rooms" class="section">
		
		<div class="container">

			<div class="post-title section-header">
								
				<h2 class="section-title fl"><?php the_title(); ?></h2>
		
			</div>

			<div class="wonderline"></div>

			<div class="post-content" style="padding: 20px;">
				<?php the_content(); ?>
			</div>

			<div class="room-list">
				
				<ul>
					
					<?php query_posts('post_type=rooms&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); 							  
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
									
					<li class="room-box">
						<div class="fl">

							<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { ?>
						
								<div style="background-image: url("<?php echo get_post_meta($post->ID, 'cebo_homethumb', true); ?>");"></div>
							
							<?php } else { ?>
							
								<div style="background-image: url(<?php echo $imgsrc[0]; ?>)"></div>
							
							<?php } ?>
								
							</div>

						<div class="fr">
							
							<h3><?php the_title(); ?></h3>

							<p><?php echo excerpt(200); ?></p>

							<div class="room-list-buttons">

								<a class="button" href="<?php if(get_post_meta ($post->ID, 'cebo_booklink', true)) { echo get_post_meta ($post->ID, 'cebo_booklink', true); } else { echo get_option('cebo_genbooklink'); } ?>" onclick="_gaq.push(['_link', this.href]);return false;">Reserve Now</a>

								<?php if(get_post_meta ($post->ID, 'cebo_more_info', true)) { ?>

									<a class="button" href="<?php the_permalink(); ?>"><?php _e('Read More', 'cebolang'); ?></a>

								<?php } ?>

							</div>

						</div>
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	

				

				</ul>

			</div>

		</div>

	</div>
	
					
<?php get_footer(); ?>