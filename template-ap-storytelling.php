<?php /* Template Name: AP Storytelling*/ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_title">
					<h1>ART PROJECTS</h1>
					<h2>STORYTELLING</h2>
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
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Image-Theater-Activities.docx.pdf">Image Theater Activities</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Activities-_-Games.docx.pdf">Storytelling Activities Games</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Story-Bank.pdf">Storytelling Story Bank</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Teacher-Planning-Questions-2.pdf">Teacher Planning Questions #2</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Writing-Prompts.docx.pdf">Writing Prompts</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/lesson-plans.png">
									<h3 class="dropdown_title">LESSON<br> PLANS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>		
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-1.pdf">Storytelling Lesson #1</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-2.pdf">Storytelling Lesson #2</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-3.pdf">Storytelling Lesson #3</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-4.pdf">Storytelling Lesson #4</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-5.pdf">Storytelling Lesson #5</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-6.pdf">Storytelling Lesson #6</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-7.pdf">Storytelling Lesson #7</option>
									  	<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Lesson-8.pdf">Storytelling Lesson #8</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/vocabulary.png">
									<h3 class="dropdown_title">VOCABULARY<br> AND READINGS</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Reading-List.pdf">Storytelling Reading List</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Vocabulary-List-for-Storytelling.pdf">Vocab List for Storytelling</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-6 dropdown_holder">
									<img class="dropdown_icon" src="<?php echo get_template_directory_uri(); ?>/img/templates.png">
									<h3 class="dropdown_title">TEMPLATES</h3>
									<select class="selectpicker" data-live-search="true" onchange="gotopage(this)">
										<option style="display: none;" selected="" disabled="">Please Select</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Story-Giants-Sickers.pdf">Story Giants Stickers</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/STORY-IDEA-BANK.pdf">Story Idea Bank</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Story-Prompts.pdf">Story Prompts</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Story-Template.pdf">Story Template</option>
										<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Tableauxworksheet.pdf">TableAux Worksheet</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="white student_work">
				  <div class="inner">
				    <h2>VISUAL INQUIRY ARTWORK</h2>
				    <ul class="responsive_visual_inquiry">
				      <li><a href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Frida-Kahlo3.pdf"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Frida-Kahlo.jpg"></a></li>
				      <li><a href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Kadir-Nelson.pdf"><img src="<?php echo get_template_directory_uri(); ?>/img/ap-storytelling-2.jpg"></a></li>
				      <li><a href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Sebastiao-Salgado.pdf"><img src="<?php echo get_template_directory_uri(); ?>/img/ap-storytelling-3.jpg"></a></li>
				      <li><a href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Aaron-Douglas-1.pdf"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/adouglas.jpg"></a></li>
				    </ul>
				    <div style="text-align: center;"><a class="cta_blue" href="<?php echo home_url(); ?>/visual-inquiry/visual-inquiry-artwork/?show=storytelling">VIEW ALL</a></div>
				  </div>
				</section>
				<section class="gray ras">
					<div class="inner">
					<div class="compact-mini-block mb-5 mt-5 no-gutters row">
						<div class="col-md-6">
						<img class="compact-mini-block-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow-and-clipboard.jpg">
					</div>
						<div class="col-md-6 compact-mini-block__text-container pl-5 pt-5 white">
							<h2 class="compact-mini-block__text-title">REFLECTION AND ASSESSMENT</h2>
							<p>Teach your students how to write an artist statement and assess their final work with these templates and rubrics.</p>
						
							<div class="dropdown_holder" style="text-align: left;">
								<select class="selectpicker" data-live-search="true" tabindex="-98" onchange="gotopage(this)">
									<option style="display: none;" selected="" disabled="">Please Select</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Effective-Storytelling-Composition.pdf">Effective Storytelling Comp</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Effective-Storytelling-Performance-Skills.pdf">Effective Storytelling Performance Skills</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/ESL-Skills-Oral-Rubric.doc.pdf">ESL Skills Oral Rubric</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Listening-Skills-Assessment.docx.pdf">Listening Skills Assessment</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Story-Giants-Gallery-Activity.pdf">Story Giants Gallery Activity</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Artist-Statement-Worksheet.pdf">Storytelling Artist Statement Worksheet</option>
									<option value="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Storytelling-Rubric-simple.pdf">Storytelling Rubric</option>
								</select>
							</div>
						
					</div>	
				    </div>
				</section>
				<section class="white student_work">
				  <div class="inner">
				    <h2>EXAMPLES OF STUDENT WORK</h2>
				    <ul class="responsive">
				      <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Aaron-Belvedere-Middle-thumb.jpg" data-toggle="modal" data-target="#modal1"></li>
				      <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Mohammed-JHS-227-thumb.jpg" data-toggle="modal" data-target="#modal2"></li>
				      <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Ali-JHS-227-thumb.jpg" data-toggle="modal" data-target="#modal3"></li>
				      <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Beverely-Belvedere-Middle-thumb.jpg" data-toggle="modal" data-target="#modal4"></li>				      
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

<!-- Large modal -->

<div class="modal fade video_modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<video id="my_video_1" class="video-js vjs-default-skin" poster="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Aaron-Belvedere-Middle.jpg" preload="none" controls="controls" width="940px" height="539px" data-setup="{ &quot;aspectRatio&quot;:&quot;940:539&quot;, &quot;playbackRates&quot;: [1, 1.5, 2] }">
				<source src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Aaron-Belvedere-Middle-School-2016-1.mp4" type="video/mp4" />
				</video>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal fade video_modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<video id="my_video_1" class="video-js vjs-default-skin" poster="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Mohammed-JHS-227.jpg" preload="none" controls="controls" width="940px" height="539px" data-setup="{ &quot;aspectRatio&quot;:&quot;940:539&quot;, &quot;playbackRates&quot;: [1, 1.5, 2] }">
				<source src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Mohammed-JHS227-1.mp4" type="video/mp4" />
				</video>
			</div>  
		</div>    
    </div>
  </div>
</div>

<div class="modal fade video_modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<video id="my_video_1" class="video-js vjs-default-skin" poster="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Ali-JHS-227.jpg" preload="none" controls="controls" width="940px" height="539px" data-setup="{ &quot;aspectRatio&quot;:&quot;940:539&quot;, &quot;playbackRates&quot;: [1, 1.5, 2] }">
				<source src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Ali-JHS227-1.mp4" type="video/mp4" />
				</video>
			</div>  
		</div>    
    </div>
  </div>
</div>
<div class="modal fade video_modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	<div class="modal-body">
			<div class="inner video_holder">
	        	<video id="my_video_1" class="video-js vjs-default-skin" poster="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Beverely-Belvedere-Middle-.jpg" preload="none" controls="controls" width="940px" height="539px" data-setup="{ &quot;aspectRatio&quot;:&quot;940:539&quot;, &quot;playbackRates&quot;: [1, 1.5, 2] }">
				<source src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/Beverly-Belvedere-Middle-School-1.mp4" type="video/mp4" />
				</video>
			</div>  
		</div>    
    </div>
  </div>
</div>

<?php get_footer(); ?>
