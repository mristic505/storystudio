<?php /* Template Name: AP Self Portrait*/ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>ART PROJECTS</h1>
					<h2>SELF PORTRAIT</h2>
				</section>

				<section class="gray">
					<div class="inner">
						<h2>CURRICULUM RESOURCES AND LESSON PLANS</h2>
						<div class="dropdowns storyboard">
							<div class="row">
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon project-planning-img-align" src="<?php echo get_template_directory_uri(); ?>/img/project-planning.png">
									<h3 class="dropdown_title">PROJECT<br>PLANNING</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>		
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/6-Week-Action-Plan.pdf">6 Week Action Plan</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Core-curriculum-guidelines.pdf">Core Curriculum</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Process_-SS-Portrait-Project-.pdf">Portait Project</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/SUPPLY-LIST-FOR-SELF-PORTRAIT-PROJECT.pdf">Supply List</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Teacher-Planning-Questions.pdf">Teacher Planning Questions</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/lesson-plans.png">
									<h3 class="dropdown_title">LESSON<br>PLANS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>		
									  	<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Self-Portrait-Lesson-1.pdf">Self Portrait #1</option>
									  	<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Self-Portrait-Lesson-2.pdf">Self Portrait #2</option>
									  	<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Self-Portrait-Lesson-5.pdf">Self Portrait #5</option>
									  	<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Self-Portrait-Lesson-6.pdf">Self Portrait #6</option>
									  	<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Self-Portrait-Lesson-7.pdf">Self Portrait #7</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/vocabulary.png">
									<h3 class="dropdown_title">VOCABULARY<br> AND READINGS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Reading-List-for-Portrait-Project.pdf">Portrait Project Reading List</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Vocabulary-List-for-Portrait-Project.pdf">Vocabulary List</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/templates.png">
									<h3 class="dropdown_title">TEMPLATES</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/“I-Am-From”-Poem-Template.pdf">"I am From" Poem</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Autobiographic-Poem-Graphic-Org.pdf">Poem Autobiography</option>
										<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/ROLE-ON-THE-WALL-fig.docx.pdf">Role on the Wall Figure</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="white">
					<div class="inner">
					<div class="compact-mini-block mb-5 mt-5 no-gutters row">
						<div class="col-md-6">
						<img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow-and-clipboard.jpg">
					</div>
						<div class="col-md-6 compact-mini-block__text-container pl-5 pt-5 white">
							<h2 class="compact-mini-block__text-title">Tutorials</h2>
							<p>Learn how to create a 3-panel storyboard collage with these tutorials. Watch the video as you create your own artwork and practice for your lesson. Print out the step-by-step PDF for quick access as you teach.</p>
						<div class="dropdown_holder" style="text-align: left;">
							<select class="selectpicker" data-live-search="true" tabindex="-98" onchange="gotopage(this)">
								<option style="display: none;" selected="" disabled="">Please Select</option>
							</select>
						</div>
					</div>	
				    </div>
				</section>
				<section class="gray student_work">
				  <div class="inner">
				    <h2>VISUAL INQUIRY ARTWORK</h2>
				    <ul class="responsive_visual_inquiry">
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/ap-storytelling-1.jpg"></li>
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/ap-storytelling-2.jpg"></li>
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/ap-storytelling-3.jpg"></li>
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/vi2.png"></li>
				    </ul>
				    <div style="text-align: center;"><a class="cta_blue" href="<?php echo home_url(); ?>/visual-inquiry">VIEW ALL</a></div>
				  </div>
				</section>
				<section class="white">
					<div class="inner">
						<div class="compact-mini-block no-gutters row">
							<div class="col-md-6">
							<img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow-and-clipboard.jpg">
						</div>
							<div class="col-md-6 compact-mini-block__text-container pl-5 pt-5 gray">
								<div class="container">
									<div class="row">
										<div class="col">
											<h2 class="compact-mini-block__text-title align-self-start">REFLECTION AND ASSESSMENT</h2>
											<p class="align-self-center pr-5" style="height: auto;">Teach your students how to write an artist statement and assess their final work with these templates and rubrics.</p>
											<div class="dropdown_holder" style="text-align: left;">
												<select class="selectpicker" data-live-search="true" tabindex="-98" onchange="gotopage(this)">
													<option style="display: none;" selected="" disabled="">Please Select</option>		
													<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Portrait-Artist-Statement-Worksheet.pdf">Portrait Artist Worksheet</option>
													<option value="http://storystudio.mristic.com/wp-content/uploads/2018/04/Self-Portrait-Rubric.docx.pdf">Self Portrait Rubric</option>

												</select>
											</div>
										</div>
									</div>
								</div>
							</div>	
					    </div>
				    </div>
				</section>
				<section class="white student_work">
				  <div class="inner">
				    <h2>STUDENT ARTWORK</h2>
				    <ul class="responsive">
				      <li><?php echo wp_get_attachment_image( 184, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal1" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 191, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal2" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 192, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal3" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 193, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal4" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 194, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal5" ) );  ?></li>
				    </ul>				    
				  </div>
				</section>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<div class="modal image_modal fade bd-example-" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal1">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<?php echo wp_get_attachment_image( 177, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal image_modal fade bd-example-" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal2">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<?php echo wp_get_attachment_image( 195, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal image_modal fade bd-example-" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal3">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<?php echo wp_get_attachment_image( 196, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal image_modal fade bd-example-" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal4">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<?php echo wp_get_attachment_image( 197, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal image_modal fade bd-example-" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal5">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<?php echo wp_get_attachment_image( 198, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>

<?php get_footer(); ?>
