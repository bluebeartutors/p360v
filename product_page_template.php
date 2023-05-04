<?php
/**
/*
* Template Name: Product Page
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
			<img src="https://property360view.net/wp-content/uploads/2018/06/blogs-bg.jpg">
			<div class="middle-text">
					<h1>Prop Tech Blogs</h1>
					<h5>Virtual Tour | Real Estate KOL | Mobile Content</h5>
			</div>
		</div>
	</section>
	<!-- banner over -->
	<section id="six-boxes-products">
		<div class="container">
		<div class="row">
		<?php 
			$args = array( 'post_type' => 'post', 'posts_per_page' => 12 );
			$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		?>
			
			<div class="col-lg-4 col-md-6">
				<div class="box">
					<a href="<?php echo get_permalink();?>" ><img src="<?php echo $featured_img_url; ?>" alt=""></a>
					<?php $contents = get_the_content();?>
					<h3><a href="<?php echo get_permalink();?>" class="titlemainss"><?php the_title(); ?></a></h3>
					<h4><?php the_field('sub_title'); ?></h4>
					<p><?php echo get_the_excerpt(); //$contentexcerpt = substr($contents,1,140); echo $contentexcerpt." ..."; ?></p>
					<a href="<?php echo get_permalink();?>" class="readmoress">Read More</a>
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

<?php get_footer();
