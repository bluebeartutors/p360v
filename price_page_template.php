<?php
/**
/*
* Template Name: Price Page
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

	<!-- page content for products page -->
	<!-- banner -->
	<section id="top-banner">
		<div class="top-banner-products">
			<?php
			$BannerImg = get_the_post_thumbnail_url(get_the_ID(), 'full');

			if( $BannerImg ) : 
			?>
				<img src="<?php echo $BannerImg; ?>" alt="<?php the_title(); ?>">
			<?php endif; ?>
			<div class="middle-text">
				<?php the_field("banner_description"); ?>
			</div>
		</div>
	</section>
	<!-- banner over -->

	<section id="price" style="padding-bottom: 50px;background: #fafafa;">
		<div class="container">
			<?php 
			$Serviceargs = array( 'post_type' => 'services', 'posts_per_page' => -1, 'post_status' => 'publish' );
			$the_query_service = new WP_Query( $Serviceargs );

			if ( $the_query_service->have_posts() ) :
			?>
			<div class="row" >
				<?php
	        	$t = 0;
	        	while ( $the_query_service->have_posts() ) : $the_query_service->the_post();

	        		$ServiceImg = get_the_post_thumbnail_url(get_the_ID(), 'full');
		        ?>
					<div class="col-lg-4 col-md-6" style="padding-bottom: 67px;">
						<div class="price-box">
							<img src="<?php echo $ServiceImg; ?>" alt="<?php the_title(); ?>">
							<h5 style="letter-spacing:2px;margin-bottom:30px"><?php the_title(); ?></h5>
							<p><?php echo get_the_excerpt(); //the_content(); ?></p>
							<p class="readmore"><a href="<?php echo get_the_permalink(); ?>"><button type="button" class="btn btn-secondary mainbutton">Read More</button></a></p>
						</div>
					</div>
				<?php
          			$t++;
          		endwhile;
          		?>
			</div>
			<?php
			endif;
			?>
		
			<div class="row">
				<div class="col-md-12" style="text-align:center"> 
					<a href="#contact"><button type="button" class="btn btn-secondary btn-contact">CONTACT US</button></a>
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- FAQ -->
	<?php 
	$FAQargs = array( 'post_type' => 'faq', 'posts_per_page' => -1, 'post_status' => 'publish' );
	$the_query_faq = new WP_Query( $FAQargs );

	if ( $the_query_faq->have_posts() ) :
	?>
		<section id="faq">
			<h5 style="text-align:center;color:#fff;font-weight: 400;font-size:25px">FAQ</h5>
	    	<div id="carouselTestimonial" class="carousel newslider" data-ride="carousel">
		        <ol class="carousel-indicators faqindi">
		        	<?php
		        	for($f = 0; $f<$the_query_faq->post_count; $f++) :
		        	?>
		          		<li data-target="#carouselTestimonial" data-slide-to="<?php echo $f; ?>" <?php if( $f == 0 ) { ?>class="active"<?php } ?> ></li>
		          	<?php
		          	endfor;
		          	?>
		        </ol>

		        <div class="carousel-inner faqmain" role="listbox">
		        <?php
		        	$f = 0;
		        	while ( $the_query_faq->have_posts() ) : $the_query_faq->the_post();
		        ?>
		          <div class="carousel-item <?php if( $f == 0 ) { ?>active<?php } ?>">
		            <div class="carousel-caption  d-md-block">
						<h6 class="text-center text-white"><span><?php the_title(); ?></span></h6>
						<?php the_content(); ?>
		            </div>
		          </div>
				<?php
          			$f++;
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
	<!-- FAQ -->

<?php get_footer(); ?>
