<?php 

/* Basic Page Template 

*/
 get_header(); ?>

<?php if( get_post_meta($post->ID, 'cebo_fullpic', true) && !get_post_meta($post->ID, 'cebo_enable_slider', true) ) { ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="fullpic">
		<div class="slide-header">
		</div>
		<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" />


	</div>

	<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>

<?php if(get_post_meta($post->ID, 'cebo_enable_slider', true)) { ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="room-featured-slider">

		<div class="fullpic">		
			<div class="flexslider">
				<ul class="slides">

					<?php 

						$gallery_top_slider = get_post_gallery_images( $post->ID );

						if( get_post_meta ($post->ID, 'cebo_booklink', true )) :
					    
						    foreach( $gallery_top_slider as $image ) {
						        $gallery_top_slider_item .= '
						        	<li style="background-image: url(' . str_replace('-150x150','',$image) . ')">
										<div class="room-slider-gradience"></div>
										<div class="slide-header">
											<a class="button" href="' . get_post_meta ( $post->ID, 'cebo_booklink', true ) . '">' . __('RESERVE NOW', 'cebolang') . '</a>
										</div>
									</li>';
						    }

						else :
						
							foreach( $gallery_top_slider as $image ) {
						        $gallery_top_slider_item .= '
						        	<li style="background-image: url(' . str_replace('-150x150','',$image) . ')">
										<div class="room-slider-gradience"></div>
										<div class="slide-header">
											<a class="button" href="' . get_option('cebo_genbooklink') . '">' . __('RESERVE NOW', 'cebolang') . '</a>
										</div>
									</li>';

						}

						endif;

					    echo $gallery_top_slider_item;
												
					?>					
					
				</ul>
			</div>

		</div>

	</div>

	<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>

<!-- search box -->

		<div class="searchbox">
		<div class="container">

			<form action="#" method="get">
				<li class="calerer">
					<input type="text" placeholder="Arrival" id="arrival_date">
					<span class="icon-calendar" aria-hidden="true">
				<input type="hidden" name="arrive" id="arv" value="">
				</span></li>
				<li class="calerer">
					<input type="text" placeholder="Departure" id="departure_date"><span class="icon-calendar" aria-hidden="true">
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

	<div id="page-content" class="section">
		
		<div class="container">
			
			<?php if(is_subpage()) { ?>
			
			
			
			<div class="post-tags">
				<ul>
	
				<?php 
						$currency = $post->ID;
						$ancestors = get_post_ancestors($post->ID);
  						$parents = $ancestors[0];
  						$this_post = $post->ID;
  						
  					query_posts(
					array(
					'post_type' => 'page',
					'post_parent' => $parents,
					'posts_per_page'=> 8,
					// 'post__not_in' => array($currency)
					
					)); if(have_posts()) : while(have_posts()) : the_post(); ?>
				<li <?php if( $this_post == $post->ID ) { echo ' class="current"'; } ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; endif; wp_reset_query(); ?>	
			</ul>
			</div>
			
			<?php } else { ?>
			
				<?php $children = get_pages('child_of='.$post->ID);
				if( count( $children ) != 0 ) { ?>
			
			<div class="post-tags">
				<ul>
	
				<?php  $parent = $post->ID; query_posts(
					array(
					'post_type' => 'page',
					'post_parent' => $parent,
					'posts_per_page'=> 8
					
					)); if(have_posts()) : while(have_posts()) : the_post(); ?>
				<li <?php if( $this_post == $post->ID ) { echo ' class="current"'; } ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; endif; wp_reset_query(); ?>	
			</ul>
			</div>
			
			<?php } } ?>
			
			
			<div class="post-title section-header">
								
				<h2 class="section-title fl"><?php the_title(); ?></h2>
		
			</div>

			<div class="wonderline"></div>
			<div class="post-content fl">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>

					<?php if( has_shortcode( $post->post_content, 'gallery' ) && !get_post_meta($post->ID, 'cebo_enable_slider', true) ) { ?>

						<div class="imagegal photos">
							
							<ul>
								
								<?php
								              
								    $gallery = get_post_gallery_images( $post->ID );
								
								    foreach( $gallery as $image ) {// Loop through each image in each gallery
								        $image_list .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$image) . ' "><img src="' . str_replace('-150x150','',$image) . '"  /></li></a>';
								    }
								    echo $image_list;
									                     
								?>

							</ul>
							
						</div>

					<?php } ?>

					<div class="clear"></div>

				<?php endwhile; endif; wp_reset_query(); ?>	

			</div>

			<div class="sidebar fr">
				
				<div class="card">

					<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('Sidebar 2') ) : ?>
					<?php endif; ?> 

				</div>
				
			</div>
			
			<div class="clear"></div>

		</div>

	</div>


<div class="clear"></div>
	
					
<?php get_footer(); ?>