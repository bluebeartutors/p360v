<?php
/**
/*
* Template Name: New F-ront Page 2021 Latest New 
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
	
    <!--<header class="masthead">-->
      <div class="container-fluid header-banner-section">
		<div class="inner-header-banner-section">
			
		  <div class="container">
            <div class="row">
				<div class="col-md-6">
					<div class="bg-video" style="background-image: url('https://property360view.net/wp-content/uploads/2021/01/middle-mobile.png');">
						<iframe title="0" src="https://my.matterport.com/show/?m=UfnMFrDsktT&amp;title=0&amp;brand=0" allowfullscreen="" allow="vr" width="222" height="468" frameborder="0"></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<div class="banner-cont-right">
						<h2>Effective, Efficient & Extraordinary</h2>
						<hr>
						<p>Getting our services means you don’t have to worry about your 3D virtual tours and aerial drone videos in Sydney and surrounding areas. We are also expert in 4K property photography & videography and 3D animated videos for built properties or off-plan properties.</p>
						<p>We are specialist in real estate virtual tours, real estate photography and videography. Our world-class video services create unique differentiation, effortlessly, at shockingly reasonable prices.</p>
					</div>
				</div>
			</div>
		  </div>
			
	    </div>
	  </div>
    
    <!--</header>-->
		<!-- Header over -->

	
	<section id="middle-heading">
		<div class="text-center text-white"><?php the_field('short_description'); ?></div>
	</section>
       <section class="home-post-three-box">
       <div class="container new-home-3-col-post">
		   <div class="row">
			   <?php
			   $args = array( 'post_type' => 'post','order'=> 'DESC', 'posts_per_page' => 3 );
			   $the_query = new WP_Query( $args ); 
			   ?>
			   <?php if ( $the_query->have_posts() ) : ?>
			   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			   $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			   ?>
				<div class="col-md-4">
					<div class="post-box-container">
						<a href="<?php the_permalink(); ?>">
						<div class="post-box">
							<?php
							if( $featured_img_url ) :
							?>
							<img src="<?php echo $featured_img_url; ?>" style="width:100%">
							<?php endif; ?>
						</div>
						<div class="post-title">
							<div class="hr-video-title">
							</div>
							<h3 class="head-a"><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-home-post">Read More</a>
						</div>
						</a>
					</div>
				</div>
			   <?php 
			   wp_reset_postdata(); 
			   endwhile;
			   endif;
			   ?>
		   </div>
	    </div>
       </section>	
	<section id="six-boxes">
		<div class="container">
			 <div class="container space-e">
				 <hr/>
			</div>
			<div class="container">
				 <!--<hr/>-->
				<h2 class="head-a space-e btn btn-secondary btn-home-services"> P360V PACKAGES </h2>
			</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="https://property360view.net/wp-content/uploads/2018/11/icon-schedule.png<?php //echo $featured_img_url; ?>" alt="selling point" />
					<h6>Discounted Photo + 360° Virtual Tour + Floor Plan Package</h6>
					<p><a href="/pricing/#table1">More Information</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="https://property360view.net/wp-content/uploads/2018/11/icon-schedule.png<?php //echo $featured_img_url; ?>" alt="selling point" />
					<h6>Photo + Floorplan Packages</h6>
					<p><a href="/pricing/#table2">More Information</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="https://property360view.net/wp-content/uploads/2018/11/icon-schedule.png<?php //echo $featured_img_url; ?>" alt="selling point" />
					<h6>Video + Influencer Packages</h6>
					<p><a href="/pricing/#table3">More Information</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="https://property360view.net/wp-content/uploads/2018/11/icon-schedule.png<?php //echo $featured_img_url; ?>" alt="selling point" />
					<h6>360° Virtual Tour Pricing</h6>
					<p><a href="/pricing/#table4">More Information</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="https://property360view.net/wp-content/uploads/2018/11/icon-schedule.png<?php //echo $featured_img_url; ?>" alt="selling point" />
					<h6>Floorplan Pricing</h6>
					<p><a href="/pricing/#table5">More Information</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<img src="https://property360view.net/wp-content/uploads/2018/11/icon-schedule.png<?php //echo $featured_img_url; ?>" alt="selling point" />
					<h6>Other</h6>
					<p><a href="#">More Information</a></p>
				</div>
			</div>			
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
						<h3 class="text-center text-white"><span style="font-weight:bold";> TESTIMONIAL </span></h3>
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
