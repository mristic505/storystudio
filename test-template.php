<?php /* Template Name: Test Template Page */ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php

				$post_type = 'attachment';

				$category = 'self-portrait';

				// Taxonomy ========
		        $tax_query = array( 
		        	'relation' => 'AND',
		            array(
		                'taxonomy' => 'category',
		                'field'    => 'slug',
		                'terms'    => $category,
		            ),
		            array(
		            	array(
			            	'taxonomy' => 'post_tag',
			                'field'    => 'slug',
			                'terms'    => array('tag1'),
			            ),
			            array(
			            	'taxonomy' => 'post_tag',
			                'field'    => 'slug',
			                'terms'    => array('tag2'),
			            ),
		            ),		            
		        );

				// Main Search Query
	            $main_query = array(                
	                'post_status' => 'any',                
	                'posts_per_page' => -1,
	                'post_type' => $post_type,
	                'tax_query' => $tax_query
	            );

	            $regular_query = new WP_Query($main_query);

	            // The Loop
	            if ( $regular_query->have_posts() ) {                
	                while ( $regular_query->have_posts() ) {
	                    $regular_query->the_post();
	                    $result .= '<h2>'.get_the_title().'</h2><br>';
	                }                
	                /* Restore original Post Data */
	                wp_reset_postdata();
	            } else {
	                $result = '<p>No results found 2.</p>';
	            } 

	            echo $result;
				?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
