<?php /* Template Name: Documenting and Exhibiting*/ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>DOCUMENTING &amp; EXHIBITING</h1>
				</section>
				<section class="gray">
					<div class="inner">
						<div class="compact-mini-block row no-gutters">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/How-to-Document-Work.png"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">How to Document Work</h2>
											<p class="align-self-center pr-5">Learn how to document student work through photography and writing.</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/1.-How-to-Document-Work.pdf">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>	
					    </div>
					
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/How-to-Share-Work.png"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">How to Share Work</h2>
											<p class="align-self-center pr-5">Explore three examples of how to share Story Studio student work at your school.</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/2.-How-to-Share-Work.pdf">SEE MORE</a>
										</div>
									</div>
								</div>
							</div>	
					    </div>
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6"><img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/Certificate-of-Completion.png"></div>
							<div class="col-md-6 compact-mini-block__text-container white">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">Certificate of Completion</h2>
											<p class="align-self-center pr-5">Celebrate your students' work with this certificate of completion!</p>
											<a class="cta_blue align-self-end" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/3.-Certificate-of-Completion.png">DOWNLOAD</a>
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
