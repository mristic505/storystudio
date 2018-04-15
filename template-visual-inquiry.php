<?php /* Template Name: Visual Inquiry*/ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>VISUAL INQUIRY</h1>
				</section>
				<section class="gray">
					<div class="inner">
						<div class="row">
							<div class="col-sm-6 visual-inquiry-gutter-small ">
								<a href="<?php echo home_url(); ?>//visual-inquiry/visual-inquiry-artwork/?show=self-portrait"><img src="<?php echo get_template_directory_uri(); ?>/img/self-portrait-tile.jpg"></a>
							</div>
							<div class="col-sm-6 visual-inquiry-gutter-small ">
								<a href="<?php echo home_url(); ?>//visual-inquiry/visual-inquiry-artwork/?show=collage"><img src="<?php echo get_template_directory_uri(); ?>/img/collage-tile.jpg"></a>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-sm-6 visual-inquiry-gutter-small ">
								<a href="<?php echo home_url(); ?>//visual-inquiry/visual-inquiry-artwork/?show=storytelling"><img src="<?php echo get_template_directory_uri(); ?>/img/storytelling-tile.jpg"></a>
							</div>
							<div class="col-sm-6 visual-inquiry-gutter-small ">
								<a href="<?php echo home_url(); ?>//visual-inquiry/visual-inquiry-artwork/?show=additional"><img src="<?php echo get_template_directory_uri(); ?>/img/additional-artwork-tile.jpg"></a>
							</div>
						</div>			
				    </div>
				</section>
				<section class="white">
					<div class="inner">
						<div class="dropdowns storyboard">
							<div class="row">
								<div class="col-md-4 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/folder-icon.png">
									<h3 class="dropdown_title">HOW TO<br>SOURCE IMAGES</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="" >Please Select</option>		
									  	<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/How-to-Source-Visual-Inquiry-Arwork.pdf">Inquiry Artwork</option>
									</select>
								</div>
								<div class="col-md-4 dropdown_holder visual-inquiry-border">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/lightbulb-icon.png">
									<h3 class="dropdown_title">FACILITATION<br>TIPS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="" >Please Select</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/V.I.-Scaffolding-Questions-Activities.pdf">V.I. Scaffolding</option>
									</select>
								</div>
								<div class="col-md-4 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/article-icon.png">
									<h3 class="dropdown_title">TEMPLATES AND<br>GRAPHIC ORGANIZERS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="" >Please Select</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Visual-Inquiry-Graphic-Organizer-1.docx.pdf">Organizer #1</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Visual-Inquiry-Graphic-Organizer-2.docx.pdf">Organizer #2</option>
									</select>
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
