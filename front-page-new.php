<?php
/**
/*
* Template Name: Old H Page - ID003
*
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- page content-->
<!-- Header -->
	
    <header class="masthead">
      <div class="video"> 
	 <style>.codegena{position:relative;width:100%;height:0;padding-bottom:56.27198%;}.codegena iframe{position:absolute;top:0;left:0;width:100%;height:100%;border:0}</style>
	 	<div class="codegena mobile-img" <!--style="opacity:0.5"-->>
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
<!--<img src="<?php echo get_theme_file_uri( '/images/home-slider.jpg' );?>" alt="Slider">-->
        </div>
	 	<div class="codegena desktop-video ">
	 		<div>
	 			<?php
	 			$VideoUrl = get_field("video_url");

	 			if( $VideoUrl ) :
	 			?>
	 				<iframe width='1920px' height='960px' src='<?php echo $VideoUrl; ?>?autoplay=1' allow="autoplay"></iframe>
	 			<?php endif; ?>
	 		</div>
	 		<div class="video-pettern">&nbsp;</div>
	 	</div>
	  </div>
        <div class="intro-text">
          <div class="intro-lead-in"><?php the_field('video_title'); ?></div>
        </div>
    
    </header>
		<!-- Header over -->

	
	<section id="middle-heading">
		<div class="text-center text-white"><?php the_field('short_description'); ?></div>
	</section>
	
<div class="matterport-sec container-fluid text-center">
	<div class="row">
		<iframe width='1920px' height='1070px' src='https://my.matterport.com/show/?m=xGoUFcUYJXy' frameborder='0' allowfullscreen allow='vr'></iframe>
	</div>
</div>
	
	<section id="six-boxes">
		<div class="container">
		
		<div class="row">
			<div class="col-md-4">
				<?php
				$featuredImgUrl = get_the_post_thumbnail_url(get_the_ID(),'full');

				if( $featuredImgUrl ) :
				?>
					<img src="<?php echo $featuredImgUrl; ?>" style="width:100%" alt="Effective Efficient Extraordinary">
				<?php endif; ?>

				<button type="button" class="btn btn-secondary btn-home-services">Our Services</button>
			</div>
			<div class="col-md-8">
				<div class="inner-content-text">
					<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
			 <div class="container space-e">
				 <hr/>
			</div>
			<section class="homevideo-three-box">
				<div class="container">
					<h2 class="head-a space-e btn btn-secondary btn-home-services"> REAL ESTATE VIDEO SHOWCASE </h2>
				<div class="row space-e">
					<div class="col-md-4">
						<div class="video-box-container">
							<div class="video-box"><iframe src="https://player.vimeo.com/video/367730982?api=1&amp;player_id=player_337211111" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
							</div>
							<div class="video-title"><div class="hr-video-title"></div><h3 class="head-a">Meriton Year End <br>Award Show</h3></div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="video-box-container">
							<div class="video-box"><iframe src="https://player.vimeo.com/video/367732147?api=1&player_id=player_347174701" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
							</div>
							<div class="video-title"><div class="hr-video-title"></div><h3 class="head-a">Sydney CBD
<br>Edition Showroom</h3></div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="video-box-container">
							<div class="video-box"><iframe src="https://player.vimeo.com/video/367731371?api=1&player_id=player_347178205" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
							</div>
							<div class="video-title"><div class="hr-video-title"></div><h3 class="head-a">Waterloo Infinity <br>KOL Vlogging</h3></div>

						</div>
					</div>
				</div>
					
				</div>
				<!--<h2>This is three Video boxes</h2>-->
			</section>
			<div class="container" style="padding-bottom:25px;">
				 <hr/>
			</div>
		<div class="row">
		<?php 
			$args = array( 'post_type' => 'services', 'posts_per_page' => 6 );
			$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			$external_link = get_field("external_link");
		?>
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="<?php echo $featured_img_url; ?>" alt="selling point" />
					<h6><?php the_title(); ?></h6>
					<p><a href="<?php echo ($external_link != '' ? $external_link : '#'); ?>">More Information</a><?php //the_content(); ?></p>
				</div>
			</div>
		<?php wp_reset_postdata(); 
			endwhile;
		?>
		<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
			
			</div>
		</div>
	</section>
	
	<?php if( have_rows('property') ): ?>
		<section id="numbers">
			<div class="container">
				<div class="row">
					<?php while( have_rows('property') ): the_row(); ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<h3><?php echo get_sub_field('value'); ?></h3>
							<h5><?php echo get_sub_field('title'); ?></h5>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	
	<!--  slider -->
	<?php 
	$Sliderargs = array( 'post_type' => 'homeslider', 'posts_per_page' => -1, 'post_status' => 'publish' );
	$the_query_slider = new WP_Query( $Sliderargs );

	if ( $the_query_slider->have_posts() ) :
	?>
		<section>
	      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	        	<?php
	        	for($s = 0; $s<$the_query_slider->post_count; $s++) :
	        	?>
	          		<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $s; ?>" <?php if( $s == 0 ) { ?>class="active"<?php } ?> ></li>
	          	<?php
	          	endfor;
	          	?>
	        </ol>

	        <div class="carousel-inner cutom-inner" role="listbox">
	        <?php
	        	$s = 0;
	        	while ( $the_query_slider->have_posts() ) : $the_query_slider->the_post();
	        		$SlideImg = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
	        ?>
	          	<div class="carousel-item <?php if( $s == 0 ) { ?>active<?php } ?>" style="background: linear-gradient(0deg,rgba(0,0,000,0.3),rgba(0,0,00,0.3)),url('<?php echo $SlideImg; ?>')">
		            <div class="carousel-caption">
						<?php the_content(); ?>
		            </div>
	        	</div>
	        <?php
          			$s++;
          		endwhile;
          	?>
          	</div>

	        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>

	      </div>
	    </section>
	<?php
	endif;
	?>
	<!-- slider over -->

	<!-- testimonial -->
	<?php 
	$Testimonialargs = array( 'post_type' => 'testimonial', 'posts_per_page' => -1, 'post_status' => 'publish' );
	$the_query_testimonial = new WP_Query( $Testimonialargs );

	if ( $the_query_testimonial->have_posts() ) :
	?>
		<section>
		    <div id="carouselTestimonial" class="carousel newslider testiomonisaaa" data-ride="carousel">

		        <ol class="carousel-indicators indicotestimonial">
		        	<?php
		        	for($t = 0; $t<$the_query_testimonial->post_count; $t++) :
		        	?>
		          		<li data-target="#carouselTestimonial" data-slide-to="<?php echo $t; ?>" <?php if( $t == 0 ) { ?>class="active"<?php } ?> ></li>
		          	<?php
		          	endfor;
		          	?>
		        </ol>

		        <div class="carousel-inner" role="listbox">
		        <?php
		        	$t = 0;
		        	while ( $the_query_testimonial->have_posts() ) : $the_query_testimonial->the_post();
		        ?>
		          <div class="carousel-item <?php if( $t == 0 ) { ?>active<?php } ?>">
		            <div class="carousel-caption  d-md-block">
						<h3 class="text-center text-white"<span style="font-weight:bold"> TESTIMONIAL </span></h3>
						<?php the_content(); ?>
		            </div>
		          </div>
		        <?php
          			$t++;
          		endwhile;
          		?>
		        </div>

		        <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
		          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>

		    </div>
	    </section>
	<?php
	endif;
	?>
	<!-- testimonial -->
    

<?php get_footer();
