<?php
/**
/*
* Template Name: Matterports List Page
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

<section id="top-banner">
	<div class="top-banner-products">
		<img src="https://property360view.net/wp-content/uploads/2018/06/blogs-bg.jpg">
		<div class="middle-text">
				<h2><?php echo single_cat_title();  ?></h2>
				<?php 
				the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
				?>
		</div>
	</div>
</section>
            
<div class="container">
    <div class="row">
        <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $current_category = get_queried_object();
			$args = array( 
			    'post_type' => 'matterports', 
			    'posts_per_page' => 12, 
			    'paged' => $paged,
			    'tax_query' => array(
                    array(
                    'taxonomy' => 'matterports_category',
                    'field' => 'term_id',
                    'terms' => $current_category->term_id,
                    )
                    )
			    );
			$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		?>
		<div class="col-md-4">
            <div class="box">
				<?php the_field('matterports_embed_content'); ?>
            <!-- <a href="<?php echo get_permalink();?>" >
				
				<img src="<?php //echo $featured_img_url; ?>" alt=""> 
			</a>-->
            <?php //$contents = get_the_content();?>
            <!--<h3><a href="<?php //echo get_permalink();?>" class="titlemainss"><?php the_title(); ?></a></h3>-->
				<h3><a class="titlemainss"><?php the_title(); ?></a></h3>
            </div>
        </div>
        <?php wp_reset_postdata(); 
			endwhile;
		?>
		<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	
    </div>
    
    <div class="pagination">
            <?php 
            echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $the_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
            ) );
            ?>
    </div>
    
</div>
<?php get_footer(); ?>