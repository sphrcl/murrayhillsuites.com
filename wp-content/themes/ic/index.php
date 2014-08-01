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
				        <ul class="extended-nav">
				          <a><li class="top" style="background-color: #565e69;">HOTEL FEATURES</li></a>
				          <a><li>30 day minimum stay</li></a>
				          <a><li>Utilities, cable, local calls included</li></a>
				          <a><li>On site fitness center</li></a>
				          <a><li>Business center</li></a>
				          <a><li>Complimentary 7 day maid service</li></a>
				          <a><li>Complimentary Wi-Fi</li></a>
				          <a><li>Doorman</li></a>
				          <a><li>Concierge services</li></a>
				          <a><li>Laundry room</li></a>
				          <a><li>Dishwasher </li></a>
				          <a><li>Complimentary coffee and tea</li></a>
				          <a><li>Complimentary morning paper</li></a>
				          <a><li class="bottom">Wake up service</li></a>				          				          
				        </ul>
			      </div>

		
				</div>
			
			<div class="clear"></div>

		</div>

	</div>
	



	
	
<?php include (TEMPLATEPATH . '/library/super-map.php'); ?>
<?php get_footer(); ?>
