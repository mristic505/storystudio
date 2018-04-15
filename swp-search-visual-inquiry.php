<?php /* Template Name: Search Visual Inquiry */ 

global $post;


get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <section class="page_title">
          <h1>VISUAL INQUIRY ARTWORK</h1>
        </section>
                <section class="gray" style="min-height: 70vh;">
                    <div class="inner">    
        				<!-- begin search form -->
                        <div class="search-box">
                            <form id="swp_form" role="search" method="get" class="search-form" action="">
                                
                                    <div class="form-group form-inline search_bar">                                   
                                        <input type="search" class="search-field form-control mb-2 mr-sm-2 mb-sm-0" placeholder="ENTER KEYWORD" value="" name="swpquery" title="Enter keyword"><button type="submit" class="fa fa-search"></button>

                                    </div>

                                    <!-- Categories -->
                                    <div class="form-inline categories">
                                        <div class="custom-control custom-radio">
                                          <input checked="" type="radio" id="self-portrait" name="category" class="custom-control-input cat_radio_btn" value="self-portrait">
                                          <label class="custom-control-label" for="self-portrait"><span></span>SELF PORTRAIT</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input type="radio" id="collage" name="category" class="custom-control-input cat_radio_btn" value="collage">
                                          <label class="custom-control-label" for="collage"><span></span>COLLAGE</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input type="radio" id="storytelling" name="category" class="custom-control-input cat_radio_btn" value="storytelling">
                                          <label class="custom-control-label" for="storytelling"><span></span>STORY TELLING</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input type="radio" id="additional" name="category" class="custom-control-input cat_radio_btn" value="additional">
                                          <label class="custom-control-label" for="additional"><span></span>ADDITIONAL ARTWORK</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input type="radio" id="all" name="category" class="custom-control-input cat_radio_btn" value="all">
                                          <label class="custom-control-label" for="all"><span></span>ALL</label>
                                        </div>
                                    </div>
                                    <!-- End Categories -->

                                    <!-- Tags -->
                                    <div class="form-inline tags">
                                        <?php $tags = get_tags(array('hide_empty' => false));                         
                                        foreach ($tags as $tag) { ?>
                                            <div class="custom-control custom-checkbox mb-2 mr-sm-2">
                                              <input name="tag[]" value="<?php echo $tag->name; ?>" type="checkbox" class="custom-control-input tag_radio_btn" id="tag_<?php echo $tag->name; ?>">
                                              <label class="custom-control-label" for="tag_<?php echo $tag->name; ?>"><?php echo $tag->name; ?><i class="fa fa-times-circle" aria-hidden="true"></i></label>
                                            </div>
                                       <?php } ?>
                                    </div>
                                    <!-- End Tags -->                                    
                                
                            </form>
                        </div>
                        <!-- end search form -->

                        <div id="swp_result" class="row swp_result"></div>

                    </div>

                
                <!-- <div class="inner">    
                <div class="swp_result">

                  <div class="search_item vinquiry">
                    <div style="background-color: gray" class="thumb_holder"></div>
                    <div class="artist_name">Artist Name</div>
                    <div class="artwork_title">Artwork Title</div>
                    <div class="year_made">Year Made</div>
                  </div>
               

                  <div class="search_item vinquiry">
                    <div style="background-color: gray" class="thumb_holder"></div>
                    <div class="artist_name">Artist Name</div>
                    <div class="artwork_title">Artwork Title</div>
                    <div class="year_made">Year Made</div>
                  </div>
                

                  <div class="search_item vinquiry">
                    <div style="background-color: gray" class="thumb_holder"></div>
                    <div class="artist_name">Artist Name</div>
                    <div class="artwork_title">Artwork Title</div>
                    <div class="year_made">Year Made</div>
                  </div>
                

                  <div class="search_item vinquiry">
                    <div style="background-color: gray" class="thumb_holder"></div>
                    <div class="artist_name">Artist Name</div>
                    <div class="artwork_title">Artwork Title</div>
                    <div class="year_made">Year Made</div>
                  </div>
               

                  <div class="search_item vinquiry">
                    <div style="background-color: gray" class="thumb_holder"></div>
                    <div class="artist_name">Artist Name</div>
                    <div class="artwork_title">Artwork Title</div>
                    <div class="year_made">Year Made</div>
                  </div>
                

                  <div class="search_item vinquiry">
                    <div style="background-color: gray" class="thumb_holder"></div>
                    <div class="artist_name">Artist Name</div>
                    <div class="artwork_title">Artwork Title</div>
                    <div class="year_made">Year Made</div>
                  </div>

                </div>
              </div> -->

                </section>

			</article>
			<!-- /article -->

		<?php endwhile; ?>


		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
