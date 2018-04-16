<?php /* Template Name: Home Page */ 

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="home_hero">
				    <div class="h1">Promoting literacy through the power of storytelling</div>
				    <div class="h2">Story Studio elevates student achievement in reading, writing, listening &amp; speaking skills through the power of visual art and storytelling in programs throughout the US.</div>
				</div>
				<section class="gray stats">
				    <div class="inner">
				        <div class="row">
				            <div class="col-sm n1">
				                <div class="n_holder">
				                    <div class="counter"><span id="n1">0</span>%</div>
				                </div>
				                <div class="n_text">OF TEACHERS REPORTED THAT THEY HAVE GAINED EXPERIENCE IN USING THE ARTS IN THEIR CLASSROOM THROUGH THE STORY STUDIO PROGRAM.</div>
				            </div>
				            <div class="col-sm n2">
				                <div class="n_holder">
				                    <div class="counter"><span id="n2">0</span>%</div>
				                </div>
				                <div class="n_text">OF THE TEACHERS REPORTED THAT USING THE ARTS HAS HELPED THEM GROW PROFESSIONALLY.</div>
				            </div>
				            <div class="col-sm n3">
				                <div class="n_holder">
				                    <div class="counter"><span id="n3">0</span>%</div>
				                </div>
				                <div class="n_text">OF TEACHERS DEVELOPED THE ABILITY TO TEACH VISUAL ARTS &amp; THEATER UNITS AS PART OF THEIR ESL CURRICULUM.</div>
				            </div>
				        </div>
				        <div style="text-align: center;"><a class="cta_blue" href="/wp-content/uploads/2018/04/2016-2017-Story-Studio-Final-Report.pdf">2017 ANNUAL REPORTS</a></div>
				    </div>
				</section>
				<section class="gray hp_video">
				    <div class="inner video_holder">
				        <video id="my_video_1" class="video-js vjs-default-skin" poster="<?php echo home_url(); ?>/wp-content/uploads/2018/04/2018-04-13.jpg" preload="none" controls="controls" width="940px" height="539px" data-setup="{ &quot;aspectRatio&quot;:&quot;940:539&quot;, &quot;playbackRates&quot;: [1, 1.5, 2] }">
				            <source src="<?php echo home_url(); ?>/wp-content/uploads/2018/04/STORY-STUDIO-Urban-Arts-Partnership.mp4" type="video/mp4" />
				        </video>
				    </div>
				</section>
				<section class="white student_work">
				  <div class="inner">
				    <h2>STUDENT ARTWORK</h2>
				    <ul class="responsive">
				      <li><?php echo wp_get_attachment_image( 184, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal1" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 185, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal2" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 186, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal3" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 187, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal4" ) );  ?></li>
				      <li><?php echo wp_get_attachment_image( 188, array('220', '290'), "", array( "data-toggle" => "modal", "data-target" => "#modal5" ) );  ?></li>
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
	        	<?php echo wp_get_attachment_image( 178, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 179, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 180, 'large', "", "" );  ?>
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
	        	<?php echo wp_get_attachment_image( 181, 'large', "", "" );  ?>
			</div>  
		</div>    
    </div>
  </div>
</div>

<?php get_footer(); ?>
