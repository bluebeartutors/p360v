<?php
/**
/*
* Template Name: Full Width Page
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

            
<div class="container space-tb-40">
    <div class="row">
        <div class="col-md-12">        
<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
            ?>
            

            <?php
			the_content();

			endwhile;
			?>
		</div>
    </div>
</div>
			<?php

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>
	

<?php get_footer();
?>

