<?php
/*
Template Name: Services
*/
get_header(); ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <?php get_template_part( 'template-parts/content', 'page-banner' ) ?>
    <!-- ##### Breadcrumb Area End ##### -->

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

    <!-- ##### Special Feature Area Start ###### -->
    <section class="special-feature-area d-flex flex-wrap">
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <p><?php echo $options['service_pg_sec_1_sml_txt']; ?></p>
                    <h2><?php echo $options['service_pg_sec_1_headline']; ?></h2>
                </div>
                <h6><?php echo $options['service_pg_sec_1_content']; ?></h6>
                <a href="<?php echo $options['service_pg_sec_1_btn_url']; ?>" class="btn credit-btn btn-2 box-shadow"><?php echo $options['service_pg_sec_1_btn']; ?></a>
            </div>
        </div>
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax"></div>
    </section>
    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### Special Feature Area Start ###### -->
    <section class="special-feature-area style-2 d-flex flex-wrap">
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-2 bg-img jarallax"></div>
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <p><?php echo $options['service_pg_sec_2_sml_txt']; ?></p>
                    <h2><?php echo $options['service_pg_sec_2_headline']; ?></h2>
                </div>
                <h6><?php echo $options['service_pg_sec_2_content']; ?></h6>
                <a href="<?php echo $options['service_pg_sec_2_btn_url']; ?>" class="btn credit-btn box-shadow"><?php echo $options['service_pg_sec_2_btn']; ?></a>
            </div>
        </div>
    </section>
    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### FAQ Area Start ###### -->
    <section class="credit-faq-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- FAQ Area -->
                <div class="col-12 col-lg-6">


                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        
                        <?php 
                            $accordions = $options['service_pg_group'];
                            foreach($accordions as $accordion) { ?>
                                <!-- single accordian area -->
                                <button class="collapsible"><?php echo $accordion['service_sec_pg_3_btn']; ?></button>
                                <div class="content">
                                    <p><?php echo $accordion['service_sec_pg_3_content']; ?></p>
                                </div>
                        <?php }
                        ?>
            
                    </div>
                </div>

                <!-- Add Area -->
                <div class="col-12 col-md-6">
                    <div class="add-area mb-100">
                        <a href="<?php echo $options['service_pg_3_img_url']; ?>">
                        <?php if($options['service_pg_3_img']){ ?>
                            <img src="<?php echo $options['service_pg_3_img']['url']; ?>" alt="">
                        <?php } else{ ?>
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/bg-img/add2.png" alt="">
                        <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### FAQ Area End ###### -->

<?php get_footer(); ?>