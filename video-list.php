<?php
/**
 * Template Name: Video List
 */

get_header();
?>

<section class="header-section">
	<div class="full-video-banner">
		<div class="vimeo-iframe-box">
			<iframe src="https://player.vimeo.com/video/337211111?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<script src="https://player.vimeo.com/api/player.js"></script>
	</div>
</section>

<div class="container">
	<div class="head-caption">
		<h2 class="films-head-a text-center">Joy Runners@Sydney Half Marathon </h2>
		<p class="space-c"></p>
		<p class="text-a text-center">  DONKI - Australia's Best Wechat App Platform</p>
		<p class="space-c"></p>
		<p class="buttons text-center">
			<a class="btn btn-b" href="ht/what-is-wechat-mini-program/">Wechat Program</a> <a class="btn btn-c" href="http://donki.com.au/lv-storage/">Lv Storage</a>
		</p>
	</div>
</div>

<section class="con-b">
	<div class="container">
		
		<ul class="list-unstyled list-tabs clearfix nav nav-tabs" id="nav-tab" role="tablist">	
			<?php
			$args =
				array(
					'taxonomy' => 'videos_category',
				    'orderby' => 'id',
                    'order'   => 'ASC',
				
					  //'field' => 'id',
					  //'terms' => 1, // Where term_id of Term 1 is "1".
					  //'include_children' => false
					 // //'field' => 'slug',
			         // //'terms' => 'bingo-sites', 'casino-sites','slot-sites',
			);


			$cats = get_categories($args);
			$j=1;
			foreach($cats as $cat) {
				//print_r($cat);
				$taxotitle = $cat->name ;
				$taxotitle_array = explode(' ', $taxotitle);
				$first_word = $taxotitle_array[0];
			?>
			
			<li class="<?php //if($j==1) { echo 'active'; } ?>"><a class="nav-item nav-link <?php if($j==1) { echo 'active'; } ?>" href="#<?php echo substr($cat->name,0) ?>" role="tab" data-toggle="tab"><?php echo substr($cat->name,0); ?><?php //echo $first_word; //$cat->name; ?></a></li>

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
							<p class="space-b"></p>
							<div class="text-a"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?></div>
							<p class="space-b"></p>
							<div class="load-more-a buttons">
								<a class="btn loadmorebtn" href="<?php the_permalink(); ?>">Read More <span class="loadicon"><img src="https://property360view.net/wp-content/uploads/2019/10/icon-arrows.png">
									<!--<img src="https://property360view.net/wp-content/uploads/2019/10/icon-arrows.png<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/icon-arrows.png">--></span></a>
							</div>
							<p class="space-b"></p>
							
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
	

<?php
get_footer();
