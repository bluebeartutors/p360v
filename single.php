<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>

 <section id="single_post">
	<div class="container">
		<div class="row">
			<div  class="col-md-8">
				<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/post/content', get_post_format() );  // theme default
				
				//get_template_part( 'template-parts/post/content_post', get_post_format() );  // custom
				?>
				<div class="row">
					<div class="col-md-12"><h2 class="titlesinglesa"><?php the_title();?></h2></div>
				</div>
				<div class="row">
					<div class="col-md-12"><h4 class="single-post-subtitle"><?php the_field('sub_title'); ?></h4></div>
				</div>
				<div class="row">
					<div class="col-md-6"><span class="entry-date"><b>Date :</b> <?php echo get_the_date(); ?></span></div>
					<div class="col-md-6"><div class="authors"><b>Author :</b> <?php echo get_the_author();?></div></div>
				</div>
				<?php /*<div class="row">
					<div class="col-md-12 postthumb">
					<?php the_post_thumbnail(); ?>
					</div>
				</div> */?>
				<div class="row">
					<div class="col-md-12 contenys">
					<?php the_content(); ?>
					</div>
				</div>
				<?php 
			endwhile; // End of the loop.
			?>
			</div>
			
			<div class="col-md-4 sidebarlss">
				<?php //get_sidebar(); 
				$query = new WP_Query( array( 
					'post_type' => 'post', 
					'posts_per_page'=>'10',
					'orderby' => 'date',
                    'order' => 'DESC'
					) );
					
					if ( $query->have_posts() ) : ?>
						
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
						<div class="row sidebarmains">
							<div class="col-md-5 imagesidebars">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
							</div>
							<div class="col-md-7 titleside">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<span class="entry-dates"> <?php echo get_the_date(); ?></span>
							</div>
						</div>
						<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
					<?php else : ?>
						<!-- show 404 error here -->
					<?php endif; ?>
				
			</div>
		</div>
	</div>
	
 </section>




 
<!--<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left_contact">
						<h3>Lorem Ipsum is simply dummy text of the printing and typese</h3>
						<h4>Lorem Ipsum is simply</h4>
						<p>We are specialist in Propery video.Our world class video services create unique differentation,effortlessly,at shockingly resonable prices.
					</div>
				</div>
				
				<div class="col-lg-6 contact-form">
					<?php echo do_shortcode('[contact-form-7 id="26" title="Contact form 1"]');?>
				</div>
			</div>
		</div>
	
</section> -->
<?php get_footer();
