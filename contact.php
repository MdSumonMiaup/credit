<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <?php get_template_part( 'template-parts/content', 'page-banner' ) ?>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <a href="<?php echo esc_url( home_url('/') ) ?>"><?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            } else {
                                echo '<h1>'. get_bloginfo( 'site-title' ) .'</h1>' ;
                            }
                        ?></a>

                        <p class="mt-50"><?php echo $options['contact_pg_company_details']; ?></p>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">
                            <h5><?php echo $options['contact_pg_advisors_title']; ?></h5>

                            <?php 
                                $advisors = $options['contact_pg_advisors'];
                                foreach($advisors as $advisor) { ?>

                                <!-- Single Advisor -->
                                <div class="single-advisor d-flex align-items-center">
                                    <div class="advisor-img">
                                    <?php if($advisor['contact_pg_advisors_photo']) { ?>
                                        <img src="<?php echo $advisor['contact_pg_advisors_photo']['url']; ?>" alt="">
                                    <?php } else { ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/bg-img/25.jpg" alt="">
                                    <?php } ?>

                                    </div>
                                    <div class="advisor-info">
                                        <h6><?php echo $advisor['contact_pg_advisors_name']; ?></h6>
                                        <span><?php echo $advisor['contact_pg_advisors_post']; ?></span>
                                        <p><?php echo $advisor['contact_pg_advisors_phone']; ?></p>
                                    </div>
                                </div>

                            <?php }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5><?php echo $options['contact_heading']; ?></h5>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">

        <?php $map = $options['contact_map']; ?>

        <iframe src="https://maps.google.com/maps?q=<?php echo $map['latitude']; ?>, <?php echo $map['longitude']; ?>&z=<?php echo $map['zoom']; ?>&output=embed"></iframe>
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50"><?php echo $options['contact_form_name']; ?></h4>
                                <?php $id = $options['contact_form_id']; echo do_shortcode($id); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


<?php get_footer(); ?>