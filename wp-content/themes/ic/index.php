<?php get_header(); ?>



	<!-- ================= PRIMARY SLIDER HERE OPTIONAL ===================== -->

	<?php include (TEMPLATEPATH . '/library/featured.php'); ?>



	<div id="intro" class="section">
		
		<div class="container">

			<div class="post-title section-header">
				
				<?php query_posts('post_type=page&p=939'); if(have_posts()) : while(have_posts()) : the_post(); 	?>
				
				<h2 class="section-title fl"><?php the_title(); ?></h2>
		
			</div>
			
			<div class="wonderline"></div>
			<div class="post-content fl">
							
				<?php the_content(); ?>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	
			


			</div>

			<div class="sidebar fr">
				
				<div class="card">

					<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('Sidebar') ) : ?>
					<?php endif; ?> 

				</div>
			      	
			</div>
			
			<div class="clear"></div>

		</div>

	</div>
	



	
	
<?php include (TEMPLATEPATH . '/library/super-map.php'); ?>
<?php get_footer(); ?>
