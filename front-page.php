<?php 
/*
Template Name: Home
*/
get_header(); ?>

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <?php 
                $args = array(
                    'post_type' => 'sliders',
                    'post_per_page' => 3,
                );
                $query = new WP_Query($args);
                while($query -> have_posts()) {
                    $query -> the_post();
                    $heading = get_field('heading');
                    $button = get_field('button');
                    $button_url = get_field('button_url'); ?>

                    <div class="single-slide bg-img">
                        <!-- Background Image-->
                        <div class="slide-bg-img bg-img bg-overlay" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                        <!-- Welcome Text -->
                        <div class="container h-100">
                            <div class="row h-100 align-items-center justify-content-center">
                                <div class="col-12 col-lg-9">
                                    <div class="welcome-text text-center">
                                        <h6 data-animation="fadeInDown" data-delay="100ms"><?php echo the_title(); ?></h6>
                                        <h2 data-animation="fadeInDown" data-delay="300ms"><?php echo $heading; ?></h2>
                                        <div data-animation="fadeInDown" data-delay="500ms"><?php echo the_content(); ?></div>
                                        <a href="<?php echo $button_url; ?>" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms"><?php echo $button; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Duration Indicator -->
                        <div class="slide-du-indicator"></div>
                    </div>

                <?php  }
                wp_reset_postdata();
            ?>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Features Area Start ###### -->
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p><?php echo $options['loan_text']; ?></p>
                            <h2><?php echo $options['loan_heading']; ?></h2>
                        </div>
                        <h6><?php echo $options['loan_content']; ?></h6>
                        <a href="<?php echo $options['loan_button_url']; ?>" class="btn credit-btn mt-50"><?php echo $options['loan_button']; ?></a>
                    </div>
                </div>

                <?php 
                    $loan_features = $options['loan_features'];
                    foreach($loan_features as $feature_value) {  ?>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <?php if($feature_value['feature_image']){
                            $img = $feature_value['feature_image']; ?>
                            <img src="<?php echo $img['url']; ?>" alt="">
                        <?php } 
                        else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/bg-img/2.jpg" alt="">
                        <?php }
                        ?>
                        <h5><?php echo $feature_value['feature_text']; ?></h5>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </section>
    <!-- ##### Features Area End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax"></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p><?php echo $options['helping_txt']; ?></p>
                <h2><?php echo $options['helping_heading']; ?></h2>
            </div>
            <h6><?php echo $options['helping_content']; ?></h6>
            <div class="d-flex flex-wrap mt-50">

                <?php 
                    $circles = $options['circles'];
                    foreach($circles as $circle) { ?>

                        <!-- Single Skills Area -->
                        <div class="single-skils-area mb-70 mr-5">
                            <div id="circle" class="circle" data-value="<?php echo $circle['percent_value']; ?>">
                                <div class="skills-text">
                                    <span><?php echo $circle['circle_percent']; ?>%</span>
                                </div>
                            </div>
                            <p><?php echo $circle['circle_txt']; ?></p>
                        </div>
                <?php }
                ?>

            </div>
            <a href="<?php echo $options['helping_btn_url']; ?>" class="btn credit-btn box-shadow btn-2"><?php echo $options['helping_btn']; ?></a>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4><?php echo $options['get_touch_txt']; ?></h4>
                        </div>
                        <div class="cta-btn">
                            <a href="<?php echo $options['get_touch_btn_url']; ?>" class="btn credit-btn box-shadow"><?php echo $options['get_touch_btn']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p><?php echo $options['services_title']; ?></p>
                        <h2><?php echo $options['services_heading']; ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php 

                    $services = $options['services'];
                    foreach($services as $service) { ?>

                    <!-- Single Service Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                            <div class="icon">
                                <i class="<?php echo $service['service_icon']; ?>"></i>
                            </div>
                            <div class="text">
                                <h5><?php echo $service['service_title']; ?></h5>
                                <p><?php echo $service['service_desc']; ?></p>
                            </div>
                        </div>
                    </div>

                <?php }
                ?>

            </div>
        </div>
    </section>
    <!-- ##### Services Area End ###### -->

    <!-- ##### Miscellaneous Area Start ###### -->
    <section class="miscellaneous-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row align-items justify-content-center">
                <!-- Add Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <a href="#"> <?php if($options['misc_image']) { 
                            $img = $options['misc_image'] ?>
                            <img src="<?php echo $options['misc_image']['url']; ?>" alt="">
                        <?php } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/bg-img/add.png" alt="">
                        <?php } ?>
                        
                        </a>
                    </div>
                </div>

                <!-- Contact Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2><?php echo $options['contact_heading']; ?></h2>
                        </div>
                        <!-- Contact Content -->
                        <div class="contact-content">
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/location.png" alt="">
                                </div>
                                <div class="text">
                                    <p><?php echo $options['contact_address']; ?></p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/call.png" alt="">
                                </div>
                                <div class="text">
                                    <p><?php echo $options['contact_phone']; ?></p>
                                    <span><?php echo $options['phone_availability']; ?></span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/message2.png" alt="">
                                </div>
                                <div class="text">
                                    <p><?php echo $options['contact_email']; ?></p>
                                    <span><?php echo $options['email_availability']; ?></span>
                                </div>
                            </div>
                        </div> <!-- / Contact Content -->
                    </div>
                </div>

                <!-- News Area -->
                <?php get_sidebar('contact'); ?>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ###### -->


<?php get_footer(); ?>