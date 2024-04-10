<section id="aboutus-section" class="aboutus-area home-aboutus">
    <?php
        $aboutus_image = get_theme_mod('aboutus_image'); 
    ?>
    <div class="container">
    	<div class="row m-0">
            <!-- <div class="col-lg-7 col-md-6 col-sm-6"> -->
                <div class="abt-image">
                    <div class="img">
                        <?php 
                            if(!empty($aboutus_image)){
                                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_image).'" class="peccular-aboutus-imgboxshape" />';
                            }else{
                                echo '<img alt="aboutus us" class="sh-oly" src="'.get_template_directory_uri().'/assets/images/about2.png" />';
                            }
                        ?>
                    </div>
                    
                </div>      
            <!-- </div> -->
            <!-- <div class="col-lg-5 col-md-6 col-sm-6"> -->
                <div class="abt-dbx">
                    <h2><?php echo esc_html(get_theme_mod('aboutus_heading')); ?></h2>
                    <p><?php echo esc_html(get_theme_mod('aboutus_description')); ?></p>
                    <div class="abt-btn">
                        <a href="<?php echo esc_html(get_theme_mod('aboutus_readmorebtn_link')); ?>">
                            <?php esc_html_e('Read More','healthy-fitness-gym'); ?>
                        </a>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</section>
