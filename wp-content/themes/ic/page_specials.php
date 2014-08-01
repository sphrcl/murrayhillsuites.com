<?php 

/* Template Name: Specials List Page

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
			<div class="post-title section-header">
								
				<h2 style="padding-left: 5%;" class="section-title fl"><?php the_title(); ?></h2>
		
			</div>

<div class="container">

	<div id="rooms" class="section">
					
			<div class="post-content fl">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
					<div class="imagegal thumbgal">
						
						<ul>
							
							 <?php  query_posts(
					array(
					'post_type' => 'specials',
					'posts_per_page'=> 8
					
					)); if(have_posts()) : while(have_posts()) : the_post(); 
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
							<li>
								
					
								<?php if(get_post_meta($post->ID, 'cebo_pricepoint', true)) { ?>
								
								<div class="from-price">
									<h6><?php echo get_post_meta($post->ID, 'cebo_pricepoint', true); ?></h6>
								</div>
								
								<?php } ?>
								
								<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { ?>
								
								<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_homethumb', true); ?>"  style="width: 100%"></a>
								
								<?php } else { ?>
								
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" style="width: 100%"></a>
								
								<?php } ?>
								
								<?php if(get_post_meta($post->ID, 'cebo_subtagline', true)) { ?>
								
								<h3><?php echo get_post_meta($post->ID, 'cebo_subtagline', true); ?></h3>
								
								
								<?php } ?>

								<div class="hover-effect">
									
									<?php if(get_post_meta($post->ID, 'cebo_tagline', true)) { ?>
									
									<h3><a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'cebo_tagline', true); ?></a></h3>
									
									<?php } ?>
									
									
									<!-- , and Hotel Oceana Tote Bag., and breakfast at the Hotel. -->
									<a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-circle-right"></i></a>
								</div>
								
							</li>
						
							
							<?php endwhile; endif; wp_reset_query(); ?>	
								
								<div class="clear"></div>
						</ul>
						
					<div class="clear"></div>
					</div>

			</div>

			<div class="sidebar fr">
				
					 <div class="card">
				        <ul class="extended-nav">
				          <a><li class="top" style="background-color: #565e69;">EXTENDED STAY OPTIONS</li></a>
				          <a><li>Studio</li></a>
				          <a><li>Junior Suite</li></a>
				          <a><li>One Bedroom</li></a>
				          <a><li>Executive One Bedroom</li></a>
				          <a><li class="bottom">Executive Two Bedroom</li></a>
				        </ul>
			      </div>

		
				</div>

		</div>

	</div>
<div style="clear: both;"></div>	
					
<?php get_footer(); ?>