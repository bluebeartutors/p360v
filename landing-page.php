<?php
/**
/*
* Template Name: Landing Page
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

<script>
 jQuery('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
</script>

<div class="landingpage">

	<?php if( have_rows('banner_images') ): ?>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <div class="row sliderroes">
			    <div class="col-md-4">
					<div class="carousel-caption d-md-block titlecapton">
						<?php the_field('banner_description'); ?>
					</div>

					<div class="custombutton">
						<?php if( get_field("banner_button_text_1") ) { ?>
							<a <?php if( get_field("banner_button_link_1") ) { ?>href="<?php the_field('banner_button_link_1'); ?>"<?php } else { echo 'href="javascript:;"';} ?> ><?php the_field('banner_button_text_1'); ?></a>
						<?php } ?>

						<?php if( get_field("banner_button_text_2") ) { ?>
							<a <?php if( get_field("banner_button_link_2") ) { ?>href="<?php the_field('banner_button_link_2'); ?>"<?php } else { echo 'href="javascript:;"';} ?> ><?php the_field('banner_button_text_2'); ?></a>
						<?php } ?>
					</div>
			    	
			    	<ol class="carousel-indicators">
				    	<?php
					  	$s = 0;
					  	while( have_rows('banner_images') ): the_row();
					  		//$BannerImg = get_sub_field('image');
					  		//if( $BannerImg ) :
					  		 $BannerCont = get_sub_field('banner_content');
					  		 if( $BannerCont ) :
					  	?>
							<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $s; ?>" class="<?php if( $s == 0 ) { ?>active<?php } ?>"></li>
						<?php 	$s++;
					    	endif;
						endwhile;
						?>
					</ol>
			 	</div>
			 	
			 	<!-- For video 3D slider column-->
			 	<div class="col-md-8">
				  <div class="carousel-inner">
				  	<?php
				  	$s = 0;
				  	while( have_rows('banner_images') ): the_row();
				  		$BannerCont = get_sub_field('banner_content');

				  		if( $BannerCont ) :
				  	?>
					    <div class="carousel-item <?php if( $s == 0 ) { ?>active<?php } ?>">
					       <?php echo $BannerCont; ?>
					    	<!--<img class="d-block w-100" src="<?php echo $BannerImg['url']; ?>" data-color="lightblue" alt="First Image">-->
					    </div>
				    <?php 	$s++;
				    	endif;
					endwhile;
					?>
				  </div>
				</div>
			 	
                <!-- For image slider column-->
				<!--<div class="col-md-8">
				  <div class="carousel-inner">
				  	<?php
				  	/*$s = 0;
				  	while( have_rows('banner_images') ): the_row();
				  		$BannerImg = get_sub_field('image');

				  		if( $BannerImg ) :*/
				  	?>
					    <div class="carousel-item <?php //if( $s == 0 ) { ?>active<?php //} ?>">
					    	<img class="d-block w-100" src="<?php //echo $BannerImg['url']; ?>" data-color="lightblue" alt="First Image">
					    </div>
				    <?php /*	$s++;
				    	endif;
					endwhile; */
					?>
				  </div>
				</div>-->
				
				
			</div>
		</div>
	<?php endif; ?>

	<div class="container">
		<div class="row maindatatabs">
			<div class="col-md-6 text-center">
				<?php
				$TabLeftImg = get_field("tab_left_image");

				if( $TabLeftImg ) :
				?>
					<img src="<?php echo $TabLeftImg['url']; ?>" alt="<?php echo $TabLeftImg['title']; ?>">
				<?php endif; ?>
			</div>

			<div class="col-md-6">
				<div class="container">

					<?php if( have_rows('tab_content') ): ?>
						<ul class="nav nav-pills nav-fill navtop tabbingclass">
							<?php
						  	$t = 0;
						  	while( have_rows('tab_content') ): the_row();
						  		$TabTitle = get_sub_field('title');

						  		if( $TabTitle ) :
						  	?>
						        <li class="nav-item">
						            <a class="nav-link <?php if( $t == 0 ) { ?>active<?php } ?>" href="#menu<?php echo $t; ?>" data-toggle="tab"><?php echo $TabTitle; ?></a>
						        </li>
					    	<?php 	$t++;
					    		endif;
					    	endwhile;
					    	?>
					    </ul>

					    <div class="tab-content float-right">
					    	<?php
						  	$t = 0;
						  	while( have_rows('tab_content') ): the_row();
						  		$TabTitle = get_sub_field('title');
						  		$TabDesctiption = get_sub_field('desctiption');

						  		if( $TabTitle ) :
						  	?>
					        	<div class="tab-pane <?php if( $t == 0 ) { ?>active<?php } ?> tabsss" role="tabpanel" id="menu<?php echo $t; ?>">
					        		<?php echo $TabDesctiption; ?>
					        	</div>
							<?php	$t++;
					    		endif;
					    	endwhile;
					    	?>
					    </div>
					<?php endif; ?>

					<?php
					$TabRightImg = get_field("tab_right_image");

					if( $TabRightImg ) :
					?>
						<img src="<?php echo $TabRightImg['url']; ?>" alt="<?php echo $TabRightImg['title']; ?>" class="vrresolution">
					<?php endif; ?>
				
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<section id="features">
			<h5 style="text-align:left;color:#4a4a4a;font-weight: bold;font-size:25px">FEATURES</h5>
			<?php $Features = get_field('features'); ?>

			<div class="row">
				<div class="col-md-6 custom">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<img src="<?php echo $Features[0]['icon']['url']; ?>" alt="" width="64" height="64" class="alignleft size-full wp-image-436 iconmains" />
							<div class="text newtwxtt">
								<h6 class="cust-margin"><?php echo $Features[0]['title']; ?></h6>
							</div>
						    <div class="text-data">
						      <?php echo $Features[0]['description']; ?>
						    </div>
						</div>

						<div class="col-sm-6">
					    	<!-- <p class="iconmains" style="padding-left: 12px;">NEW</p> -->
					    	<img src="<?php echo $Features[1]['icon']['url']; ?>" alt="" width="64" height="64" class="alignleft size-full wp-image-436 iconmains" style="padding: 10px;" />
							<div class="text newtwxtt">
								<h6 class="cust-margin"><?php echo $Features[1]['title']; ?></h6>
							</div>
							<div class="text-data">
								<?php echo $Features[1]['description']; ?>
							</div>
						</div>
					</div>
					<span style="height:40px;display: inline-block;"></span>

					<?php
					$FeaturesImg = get_field("features_image");
					if( $FeaturesImg ) :
					?>
						<div class="row mobile-img">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<img src="<?php echo $FeaturesImg['url']; ?>" alt="<?php echo $FeaturesImg['title']; ?>" class="featurss">
							</div>
						</div>
					<?php endif; ?>

					<div class="row">
						<div class="col-md-6 col-sm-6">
					    	<img src="<?php echo $Features[2]['icon']['url']; ?>" alt="" width="64" height="64" class="alignleft size-full wp-image-437 iconmains" />
							<div class="text newtwxtt">
								<h6 class="cust-margin"><?php echo $Features[2]['title']; ?></h6>
							</div>
							<div class="text-data">
								<?php echo $Features[2]['description']; ?> 
							</div>
						</div>
						<div class="col-sm-6">
					    	<img src="<?php echo $Features[3]['icon']['url']; ?>" alt="" width="64" height="64" class="alignleft size-full wp-image-435 iconmains" />
							<div class="text newtwxtt">
								<h6 class="cust-margin"><?php echo $Features[3]['title']; ?></h6>
							</div>
							<div class="text-data">
								<?php echo $Features[3]['description']; ?>  
							</div>
						</div>
					</div>
					<span style="height:50px;display: inline-block;"></span>
				</div>

				<?php
				$FeaturesImg = get_field("features_image");
				if( $FeaturesImg ) :
				?>
					<div class="col-md-6 desktop-img">
						<span style="height:50px;display: inline-block;"></span>
						<img src="<?php echo $FeaturesImg['url']; ?>" alt="<?php echo $FeaturesImg['title']; ?>" class="featurss">
					</div>
				<?php endif; ?>
			</div>
		</section>
	</div>

	<section id="marketingpower">
		<div class="container">
			<div class="row">
				<?php
				$MarketingImg = get_field("marketing_power_image");
				if( $MarketingImg ) :
				?>
					<div class="col-lg-6 col-md-4 col-sm-4 custom">
						<img src="<?php echo $MarketingImg['url']; ?>" alt="<?php echo $MarketingImg['title']; ?>" class="markets">
					</div>
				<?php endif; ?>

				<div class="col-lg-6 col-md-8 col-sm-8 marketing-power">
					<h5 style="text-align:left;color:#4a4a4a;font-weight: 600;font-size:25px">MARKETING POWER</h5>
					<div class="progress mainprogress">
						<span>45% </span><div class="progress-bar" role="progressbar"  style="width: 45%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> AERIAL SHOTS</div>
					</div>

					<div class="progress mainprogress1">
						<span>92% </span> <div class="progress-bar" role="progressbar"  style="width: 92%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">3D VIRTUAL TOUR</div>
					</div>

					<div class="progress mainprogress2">
						<span>80% </span> <div class="progress-bar" role="progressbar"  style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">PHOTOGRAPHY</div>
					</div>

					<div class="progress mainprogress3">
						<span>65% </span> <div class="progress-bar" role="progressbar"  style="width: 65%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">ANIMATED VIDEO</div>
					</div>

					<div class="progress mainprogress4">
						<span>85% </span> <div class="progress-bar" role="progressbar"  style="width: 85%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">VIDEOGRAPHY</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<span style="height:50px;display: inline-block;"></span>

	<section id="explorerspace">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h2>EXPLORE SPACES BUNDLE</h2>
					<p>Win the listing, Wow your clients</p>
				</div>
				<div class="col-sm-4 dbutotnmain">
					<a href="#" class="btn btn-primary mainbutton dbtn" data-toggle="modal" data-target="#myModal">DOWNLOAD</a>
				</div>

				<!-- The Modal -->
				<div class="modal fade custom-modal" id="myModal">
				  <div class="modal-dialog modal-lg modal-dialog-centered">
				    <div class="modal-content modal-img">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <div class="modal-header offset-lg-1">
				        <h2 class="modal-title">Sign up</h2>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body mb-5">

				      	<?php echo do_shortcode('[contact-form-7 id="726" title="Landing Page Download Form"]'); ?>
				  </div>
				</div>

			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>