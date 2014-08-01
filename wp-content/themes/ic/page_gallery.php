<?php 

/* Template Name: Gallery

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

	<div id="page-content" class="section">
		
		<div class="container">

			<?php if(is_subpage()) { ?>
			
			
			<div class="post-tags">
				<ul>
	
				<?php 
						$currency = $post->ID;
						$ancestors = get_post_ancestors($post->ID);
  						$parents = $ancestors[0]; 
  						
  					query_posts(
					array(
					'post_type' => 'page',
					'post_parent' => $parents,
					'posts_per_page'=> 8,
					// 'post__not_in' => array($currency)
					
					)); if(have_posts()) : while(have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; endif; wp_reset_query(); ?>	
			</ul>
			</div>
			
			<?php } } ?>

			<div class="post-title section-header">
								
				<h2 class="section-title fl"><?php the_title(); ?></h2>
		
			</div>

			<div class="wonderline"></div>
			<div class="post-content" style="width: 100%;">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>
					
					<div class="imagegal photos">
						
						<ul>
							
							 <?php
							              
								    $gallery = get_post_gallery_images( $post->ID );
								
								
								                        
								    foreach( $gallery as $image ) {// Loop through each image in each gallery
								        $image_list .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$image) . ' "><img src="' . str_replace('-150x150','',$image) . '"  /></li></a>';
								    }
								    echo $image_list;
								                     
								?>
								
								<div class="clear"></div>
						</ul>
						
					<div class="clear"></div>
					</div>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	
<div class="clear"></div>
			</div>
			
			<div class="clear"></div>

		</div>

	</div>


<div class="clear"></div>
	
					
<?php get_footer(); ?>