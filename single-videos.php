<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!--<header class="banner-header-a" >
	<div class="banner-captions-a">
		<div class="container">
			<h3 class="banner-title"><?php //the_title(); ?></h3>
		</div>
	</div>
</header> -->

<main id="" class="content-area">
	<!--<div class="container">
	<div class="row">
	<div class="col-md-8">-->
	<?php 
	/* Start the Loop */
	while ( have_posts() ) : the_post();
	$video = get_field('video');
	?>
	<section class="header-section">
		<div class="full-video-banner">
			<div class="vimeo-iframe-box">
				<?php echo $video; ?>
			</div>
			<script src="https://player.vimeo.com/api/player.js"></script>
		</div>
	</section>
	
	<div class="container">
		<div class="head-caption">
			<h2 class="films-head-a-single-vid text-center"><?php the_title(); ?></h2>
			<p class="space-b"></p>
			<div class="single-comentshows text-b">
				<!--<div class="col-md-6 col-xs-12 multlang-swithcher text-right">
					<ul>
						<strong>Select Language : </strong> &nbsp; <?php //pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) ); ?>
					</ul>
				</div>-->
				<div class="col-md-12 col-xs-12 text-center single-blog-date">
					<span class="single-dateshows"><?php the_time('F j, Y') ?></span>
				</div>
				<!--<span class="single-dateshows"><?php //the_time('F j, Y') ?></span>-->
				<!--<span class="single-likeshows"><i class="fa fa-comment-o"></i><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>-->
			</div>
			<p class="space-d"></p>
			<div class="films-single-text-a"><?php the_content();?></div>
			<p class="space-b"></p>
			<p class="buttons text-center">
				<a class="btn btn-b" href="#">Wechat Program</a> <a class="btn btn-c" href="http://donki.com.au/lv-storage/">Lv Storage</a>
			</p>
		</div>
	</div>
  <!--</div>--> <!-- Col-md-8 END -->
	<?php /* ?>
	<div class="container">
		<h3 class="sub-head-a"><?php the_title(); ?></h3>
		<p class="space-c"></p>

		<div class="single-blogshows">
			<figure class="single-blogimages">
				<?php the_post_thumbnail('full' ,array('class' => 'img-responsive tales'));?>
			</figure>
			<div class="single-comentshows">
				<div class="row">
					<div class="col-sm-6">
						<span class="single-dateshows"><?php the_time('F j, Y') ?></span>
					</div>
					<div class="col-sm-6">
						<span class="single-likeshows"><i class="fa fa-comment-o"></i><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
					</div>
				</div>
			</div>
			<!--<p class="space-c"></p>
			<div class="video-box full-video-shows">
				<?php //echo $video; ?>
			</div>-->
			<p class="space-c"></p>
			<div class="single-blogdetails">
				<?php the_content();?>
			</div>
		</div>

		<div class="single-commentshows">
			<?php comment_form(); ?>
		</div>

		<ul class="list-unstyled single-commentlist">
			<?php
			//Gather comments for a specific page/post 
			$comments = get_comments(array(
				'post_id' => get_the_ID(),
				'status' => 'approve' //Change this to the type of comments to be displayed
			));

			//Display the list of comments
			wp_list_comments(array(
				'per_page' => 2, //Allow comment pagination
				'reverse_top_level' => false //Show the oldest comments at the top of the list
			), $comments);
			?>
		</ul>
	</div>
	
	<?php */ ?>
	
	<?php endwhile;?>
   <!-- <div class="col-md-4">
		<?php  //if ( is_active_sidebar( 'right_side_bar' ) ) { ?>
		    <div class="footer-widgets">
			<?php //dynamic_sidebar( 'right_side_bar' ); ?>
		    </div>
		<?php //} ?>
	</div>--><!-- Col-md-4 END -->
 <!--</div>--> <!-- Main Row -->
<!--</div>--> <!-- Main Conatiner -->		
</main><!-- .site-main -->

<section class="con-">
	<div class="container">
	
		<ul class="list-unstyled list-tabs clearfix nav nav-tabs" role="tablist">	
			<?php
			$args =
				array(
					'taxonomy' 
				=> 'videos_category',
				    'orderby' => 'id',
                    'order'   => 'ASC',
				    'exclude' => array( 84 ),
				   
				    //'fields' => 'ids',
				    //'field' => 'id'
					//'field' => 'id',
					 // 'terms' => 1, // Where term_id of Term 1 is "1".
					 // 'include_children' => false
					 //'field' => 'slug',
			         // //'terms' => 'bingo-sites', 'casino-sites','slot-sites',
			);

            // $cats = get_the_category( $post->ID );
            //$poID=$post->ID;
			//$catsact = get_the_category($post->ID );
			//$catact = wp_get_post_terms( $post->ID, 'videos_category');
			$address_post_id = get_the_ID() ;
			$cats = get_categories($args);
			 
			$j=1;
			foreach($cats as $cat) {
				//print_r($cat);
				$taxotitle = $cat->name ;
				$taxotitle_array = explode(' ', $taxotitle);
				$first_word = $taxotitle_array[0];
				
			?>
			<li class=""><a class="nav-item nav-link <?php if ( $j==1 ) { echo 'active'; } ?>" href="#<?php echo substr($cat->name,0) ?>" role="tab" data-toggle="tab"><?php echo substr($cat->name,0); ?><?php //echo $first_word; //$cat->name; ?></a></li>
			
			<!--<li class="<?php //if($j==1) { echo 'active'; } ?>"><a href="#<?php //echo substr($cat->name,2) ?>" role="tab" data-toggle="tab"><?php //echo substr($cat->name,2); ?><?php //echo $first_word; //$cat->name; ?></a></li>-->

			<?php $j++; } ?>

			<?php //} ?>

		</ul>
		
		<?php
		//echo '<p class="space-e"></p>';
		echo '<div class="tab-content">';
		$k=1;
		foreach($cats as $category) { ?>
		
			<div class="tab-pane fade <?php if($k==1){ echo 'in active'; } ?>" id="<?php echo substr($category->name,0);?>">
           <?php echo '<ul class="list-unstyled posting-listing">';
									 				 
			$posts_array = 
				array(
					'posts_per_page' => -1,
					'post_type' => 'videos',
					'tax_query' => array(
						array(
							'taxonomy' => 'videos_category',
							'field' => 'term_id',
							'terms' => $category->term_id,
						)
					)

			);
			/*$the_query = new WP_Query(array(
				'post_type'      => 'videos',
				'posts_per_page' => 100,
				'category_name' => $category->slug
			));*/
			$the_query = new WP_Query($posts_array );
            //Get post type count
            $post_count = $the_query->post_count;
            $i = 1;
            // Displays Custom post info
            if( $post_count > 0) :	
            $i=0;
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();
            ++$i;
            $video = get_field('video');						   
			?>
			<!-- -->
			<li class="posting-rows">
				<div class="row">
					<div class="col-md-7">
						<div class="video-box">
							<?php echo $video; ?>
						</div>
					</div>
					<div class="col-md-5">
						<div class="testright-blog">
							<h3 class="films-sub-head-a"><?php the_title(); ?></h3>
							<!--<p class="space-b"></p>-->
							<div class="text-a"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?></div>
							<p class="space-b"></p>
							<div class="load-more-a buttons">
								<a class="btn loadmorebtn" href="<?php the_permalink(); ?>">Read More <span class="loadicon"><img src="https://property360view.net/wp-content/uploads/2019/10/icon-arrows.png">
									<!--<img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/icon-arrows.png">--></span></a>
							</div>
							<p class="space-e"></p>
							
							<p class="text-a">Looking for Opportunties to Collaborate?</p>
							<p class="space-b"></p>
							<div class="buttons">
								<?php if( get_field('video_image_popup') ){ ?>
									<a class="btn btn-d html5lightbox" href="<?php the_field('video_image_popup'); ?>">Chat Us Now</a>
								<?php } else { ?>
									<a class="btn btn-d" href="javascript:void(0);">Chat Us Now</a>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</li> <!-- -->
			<?php endwhile; endif;
			wp_reset_postdata();
			echo '</ul>';
			echo '</div>';
		$i++; $k++; } 
		echo '</div>';
		?>
	</div>
	</div>
</section>
<div class="space-e"></div>
<!--<section class="con-a">
	<div class="container">
		<h2 class="sub-head-a text-uppercase text-center">合作伙伴</h2>
		<hr class="hr-b">
		<p class="space-c"></p>
		<p class="text-a text-center">我们与澳洲本地以及国际化的企业取得合作</p>
		<p class="space-e"></p>
		<div class="clients-rows">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 fullshows">
					<div class="row">

						<?php 
						/*$args=array(
							'posts_per_page' => 100, 
							'post_type' => 'clientslogo',
							'order' => 'DESC',
							'showposts' => -1
						);
						$wp_query = new WP_Query( $args );
						while ($wp_query->have_posts()) : $wp_query->the_post();
						if ( has_post_thumbnail() ){
							$clients_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
						} else {
							$clients_image = get_stylesheet_directory_uri().'/assets/images/thumb-1.jpg';
						}*/
						?>
						<div class="col-xs-4">
							<div class="client-logo-box">
								<img src="<?php //echo $clients_image; ?>" class="img-responsive">
							</div>
						</div>
						<?php
						// End the loop.
						//endwhile; 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->


<?php //get_sidebar( 'content-bottom' ); ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
