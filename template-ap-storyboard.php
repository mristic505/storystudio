<?php /* Template Name: AP - StoryBoard */ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>ART PROJECTS</h1>
					<h2>STORYBOARD/COLLAGE</h2>
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
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/8-Week-Action-Plan.pdf">8 Week Action</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Materials-for-Collage-Project.pdf">Materials for Collage Project</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Teacher-Planning-Questions-1.pdf">Teacher Planning Questions</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/lesson-plans.png">
									<h3 class="dropdown_title">LESSON<br> PLANS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>		
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-1.pdf">Story Board Collage Lesson #1</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-2.pdf">Story Board Collage Lesson #2</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-3.pdf">Story Board Collage Lesson #3</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-4.pdf">Story Board Collage Lesson #4</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-5.pdf">Story Board Collage Lesson #5</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-6.pdf">Story Board Collage Lesson #6</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-7.pdf">Story Board Collage Lesson #7</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-8.pdf">Story Board Collage Lesson #8</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Lesson-9.pdf">Story Board Collage Lesson #9</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/vocabulary.png">
									<h3 class="dropdown_title">VOCABULARY<br> AND READINGS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Reading-List.pdf">Collage Reading List</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Collage-Vocabulary-List.pdf">Vocabulary List</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/templates.png">
									<h3 class="dropdown_title">TEMPLATES</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Elements-of-Storyboard.doc.pdf">Elements of Storyboard</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/emotionalmemoryworksheet.pdf">Emotional Memoery Worksheet</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Story-Guide-Organizer.pdf">Story Guide Organizer</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Template-1.pdf">Storyboard Template #1</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Template-4.pdf">Storyboard Template #4</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section class="white">
					<div class="inner video_holder">
					    <video id="my_video_1" class="video-js vjs-default-skin" width="940px" height="490px"
					        controls preload="none" poster='<?php // echo get_template_directory_uri(); ?>/img/college-turtorial-video-poster.png'
					        data-setup='{ "aspectRatio":"940:490", "playbackRates": [1, 1.5, 2] }'>
					      <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
					      <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
					    </video>
				  	</div>
				</section> -->

				<section class="white">
					<div class="inner">
					<div class="compact-mini-block mb-5 mt-5 no-gutters row">
						<div class="col-md-6">
						<img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow-and-clipboard.jpg">
					</div>
						<div class="col-md-6 compact-mini-block__text-container pl-5 pt-5 gray">
							<h2 class="compact-mini-block__text-title">Tutorials</h2>
							<p>Learn how to create a 3-panel storyboard collage with these tutorials. Watch the video as you create your own artwork and practice for your lesson. Print out the step-by-step PDF for quick access as you teach.</p>						
						<div class="dropdown_holder" style="text-align: left;">
							<select class="selectpicker" data-live-search="true" tabindex="-98">
								<option style="display: none;" selected="" disabled="">Please Select</option>
								<option class="fire_modal" data-toggle="modal" data-target="#modal6">Collage Tutorial Video</option>
							</select>
						</div>
					</div>	
				    </div>
				</section>

				<section class="gray student_work">
				  <div class="inner">
				    <h2>VISUAL INQUIRY ARTWORK</h2>
				    <ul class="responsive_visual_inquiry">
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/vi1.png"></li>
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/vi2.png"></li>
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/vi3.png"></li>
				      <li><img src="<?php echo get_template_directory_uri(); ?>/img/vi2.png"></li>
				    </ul>
				    <div style="text-align: center;"><a class="cta_blue" href="<?php echo home_url(); ?>/visual-inquiry-artwork/?show=collage">VIEW ALL</a></div>
				  </div>
				</section>

				<section class="white">
					<div class="inner">
					<div class="compact-mini-block mb-5 mt-5 no-gutters row">
						<div class="col-md-6">
						<img class="compact-mini-block-img" src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Reflection-and-Assessment-1-1.png">
					</div>
						<div class="col-md-6 compact-mini-block__text-container pl-5 pt-5 gray">
							<h2 class="compact-mini-block__text-title">Reflection And Assesment</h2>
							<p>Teach your students how to write an artist statement and assess their final work with these templates and rubrics - focusing on both the visual components of the collage and written components of their story. </p>
						<div class="">
							<div class="dropdown_holder" style="text-align: left;">
							<select class="selectpicker" data-live-search="true" tabindex="-98" onchange="gotopage(this)">
									<option style="display: none;" selected="" disabled="">Please Select</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storyboard-Rubric.docx.pdf">Storyboard Rubric</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Peer-Collage-Reflection-.pdf">Peer Collage Reflection</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Collage-Artist-Statement-Worksheet.pdf">Collage Artist Statement Worksheet</option>									
								</select>
							</div>
						</div>
					</div>	
				    </div>
				</section>

				<section class="gray student_work">
				  <div class="inner">
				    <h2>STUDENT ARTWORK</h2>
				    <ul class="responsive">
				      <li><?php echo wp_get_attachment_image( 199, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal1" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 200, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal2" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 201, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal3" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 202, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal4" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 208, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal5" ) );  ?></li>
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
	        	<?php echo wp_get_attachment_image( 207, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 205, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 204, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 203, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 206, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal6">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<video id="my_video_1" class="video-js vjs-default-skin" poster="<?php echo home_url(); ?>/wp-content/uploads/2018/04/2018-04-13.jpg" preload="none" controls="controls" width="940px" height="539px" data-setup="{ &quot;aspectRatio&quot;:&quot;940:539&quot;, &quot;playbackRates&quot;: [1, 1.5, 2] }">
				<source src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Aaron-Belvedere-Middle-School-2016-1.mp4" type="video/mp4" />
				</video>
			</div>  
		</div>    
    </div>
  </div>
</div>

<?php get_footer(); ?>
