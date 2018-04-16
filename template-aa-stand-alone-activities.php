<?php /* Template Name: AA Stand Alone Activities*/ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>ART ACTIVITIES</h1>
					<h2>STAND ALONE ACTIVITIES</h2>
				</section>
				<section class="gray">
					<div class="inner">
						<div class="compact-mini-block row no-gutters">
							<div class="col-md-6"><img class="compact-mini-block-img" src="http://storystudio.mristic.com/wp-content/uploads/2018/04/postcard-activity.png"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">Postcard Activity</h2>
											<p class="align-self-center pr-5">Students can apply their watercolor, collage and composition skills to complete this stand alone activity. Then mail it to a friend!</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Postcard-Activity.pdf">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>	
					    </div>
					
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/pen-and-ink.png"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">Pen and Ink</h2>
											<p class="align-self-center pr-5">This stand alone activity will enhance students' understanding of line drawings and free form. Many students like to integrate this technique in their storyboard collages.</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Pen-and-Ink-Lesson-Plan.pdf">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>	
					    </div>
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/podcast-activity.png"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">Podcast Activity</h2>
											<p class="align-self-center pr-5">This activity will give students the detailed steps to create a podcast. They will work in teams by taking on various roles, engaging with writing, speaking and interviewing.</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Do-It-Yourself-Podcast.pdf">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>	
				    </div>
				</section>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
