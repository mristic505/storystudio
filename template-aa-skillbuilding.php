<?php /* Template Name: AA Skill Building*/ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>ART ACTIVITIES</h1>
					<h2>SKILL BUILDING ACTIVITIES</h2>
				</section>
				<section class="gray">
					<div class="inner">
						<div class="compact-mini-block row no-gutters">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/watercolor-tile.jpg"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">Watercolor Techniques</h2>
											<p class="align-self-center pr-5">This lesson will teach students the foundations of watercolor through practicing various techniques. It can help prepare students for painting their self portraits.</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Color-Theory-and-Watercolor-Lesson-Plan.pdf" target="_blank">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>	
					    </div>
					
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/visual-sequence-tile.jpg"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">Visual Sequencing</h2>
											<p class="align-self-center pr-5">This activity will help prepare students for the Storyboard Collage project through an exploration of visual story sequencing.</p>
											<a target="_blank" class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/VIsual-Sequencing-Lesson.pdf">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>	
					    </div>
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/bad-haircut-tile.jpg"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">The Bad Haircut:<br>Listening & Writing</h2>
											<p class="align-self-center pr-5">In supplement to the Storytelling project, this lesson will allow students to analyze and discuss the important elements of a performed story.</p>
											<select class="selectpicker align-self-end" data-live-search="true" onchange="gotopage(this)">
												<option style="display: none;" selected="" disabled="">Please Select</option>		
												<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/The-Bad-Haircut-Stand-Alone-Lesson.pdf">Bad Haircut Stand Alone</option>
											</select>
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
