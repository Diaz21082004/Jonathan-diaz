<section id="slider-section" class="slider-area home-slider">
   <!-- <div class="slideinning"></div> -->
  <!-- start of hero --> 
    <section class="hero-slider hero-style">
        <div class="healthy_fitness_gymswiper-container">
            <div class="swiper-wrapper">
              <?php for($p=1; $p<6; $p++) { ?>
              <?php if( get_theme_mod('slider'.$p,false)) { ?>
              <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
              <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
              <?php 
                if(has_post_thumbnail()){
                  $img = esc_url($image[0]);
                }
                if(empty($image)){
                  $img = get_template_directory_uri().'/assets/images/default.png';
                }

              ?>
                <div class="healthy_fitness_gymswiper-slide">
                    <div class="healthy_fitness_gymslide-inner slide-bg-image">
                        <div class="sl-r-img">
                            <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">   
                            <!-- <div class="slidersvg2"> </div> -->
                        </div>
                        

                        <div class="sliderheading">
                          <h3 class="head1"><?php echo esc_html(get_theme_mod('slider_heading1')); ?></h3>
                          <h4 class="head2"><?php echo esc_html(get_theme_mod('slider_heading2')); ?></h4>
                        </div>

                        
                        <div class="slidercontent">
                          <div class="slide-title">
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                              <h2><?php the_title_attribute(); ?></h2>   
                            </a>
                          </div>    
                        </div>
                        <div class="socialicons">
                            <a href="<?php echo esc_html(get_theme_mod('slider_fblink')); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo esc_html(get_theme_mod('slider_instalink')); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- </div> -->
                    </div>
                </div>
              <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php } } ?>
                <div class="clear"></div> 

            </div>
           <!-- swipper controls -->
            <!-- <div class="healthy_fitness_gymswiper-pagination"></div> -->
            <div class="healthy_fitness_gymswiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="healthy_fitness_gymswiper-button-prev"><i class="fa fa-angle-left"></i></div>
        </div>
    </section>
    <div class="container">
    <div class="videos ">
        <div class="row m-0">
          <div class="col-lg-3 col-md-6 col-sm-12 vbox">
              <?php
              $sliderytvideolink1 = get_theme_mod('slider_ytvideolink1');

              if (!empty($sliderytvideolink1)) {
                  // Extract video ID from the URL
                  $ytid = '';

                  // Check for various YouTube URL formats and extract video ID
                  if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $sliderytvideolink1, $matches)) {
                      $ytid = $matches[1];
                  }

                  // Display embedded YouTube video if video ID is found
                  if (!empty($ytid)) {
                      echo '<div class="youtube-video">';
                      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $ytid . '" frameborder="0" allowfullscreen></iframe>';
                      echo '</div>';
                  }
              }
              ?>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 vbox">
              <?php
              $sliderytvideolink2 = get_theme_mod('slider_ytvideolink2');

              if (!empty($sliderytvideolink2)) {
                  // Extract video ID from the URL
                  $ytid = '';

                  // Check for various YouTube URL formats and extract video ID
                  if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $sliderytvideolink2, $matches)) {
                      $ytid = $matches[1];
                  }

                  // Display embedded YouTube video if video ID is found
                  if (!empty($ytid)) {
                      echo '<div class="youtube-video">';
                      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $ytid . '" frameborder="0" allowfullscreen></iframe>';
                      echo '</div>';
                  }
              }
              ?>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 vbox">
              <?php
              $sliderytvideolink3 = get_theme_mod('slider_ytvideolink3');

              if (!empty($sliderytvideolink3)) {
                  // Extract video ID from the URL
                  $ytid = '';

                  // Check for various YouTube URL formats and extract video ID
                  if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $sliderytvideolink3, $matches)) {
                      $ytid = $matches[1];
                  }

                  // Display embedded YouTube video if video ID is found
                  if (!empty($ytid)) {
                      echo '<div class="youtube-video">';
                      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $ytid . '" frameborder="0" allowfullscreen></iframe>';
                      echo '</div>';
                  }
              }
              ?>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 vbox">
              <?php
              $sliderytvideolink4 = get_theme_mod('slider_ytvideolink4');

              if (!empty($sliderytvideolink4)) {
                  // Extract video ID from the URL
                  $ytid = '';

                  // Check for various YouTube URL formats and extract video ID
                  if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $sliderytvideolink4, $matches)) {
                      $ytid = $matches[1];
                  }

                  // Display embedded YouTube video if video ID is found
                  if (!empty($ytid)) {
                      echo '<div class="youtube-video">';
                      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $ytid . '" frameborder="0" allowfullscreen></iframe>';
                      echo '</div>';
                  }
              }
              ?>
          </div>
          

        </div>
  </div>
</div>
    
  <!-- end of hero slider -->
</section>

