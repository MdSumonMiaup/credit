<?php
/*
Template Name: About Us
*/
get_header(); ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <?php get_template_part( 'template-parts/content', 'page-banner' ) ?>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p><?php echo esc_html($options['about_pg_sec_1_sml_txt']); ?></p>
                            <h2><?php echo esc_html($options['about_pg_sec_1_headline']); ?></h2>
                        </div>
                        <h6 class="mb-4"><?php echo esc_html($options['about_pg_sec_1_content_b']); ?></h6>
                        <p class="mb-0"><?php echo esc_html($options['about_pg_sec_1_content']); ?></p>
                        <a href="<?php echo esc_url($options['about_pg_sec_1_btn_url']); ?>" class="btn credit-btn mt-50"><?php echo esc_html( $options['about_pg_sec_1_btn'] ); ?></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <?php if($options['about_pg_sec_1_img']){ ?>
                            <img src="<?php echo $options['about_pg_sec_1_img']['url']; ?>" alt="">
                        <?php } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/bg-img/14.jpg" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p><?php echo esc_html( $options['about_pg_sec_2_sml_txt'] ); ?></p>
                <h2><?php echo esc_html( $options['about_pg_sec_2_headline'] ); ?></h2>
            </div>
            <h6 class="mb-0"><?php echo esc_html( $options['about_pg_sec_2_content'] ); ?></h6>

            <div class="d-flex flex-wrap align-items-center justify-content-between">

                <?php 
                    $achivements = $options['achivements'];
                    foreach($achivements as $achive) { ?>

                    <!-- Single Cool Facts -->
                    <div class="single-cool-fact white d-flex align-items-center mt-50">
                        <div class="scf-icon mr-15">
                            <i class="<?php echo esc_attr( $achive['achive_icon'] ); ?>"></i>
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter"><?php echo esc_html( $achive['achive_amount'] ); ?></span></h2>
                            <p><?php echo esc_html( $achive['achive_name'] ); ?></p>
                        </div>
                    </div>

                <?php }
                ?>

            </div>
        </div>
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img about-bg-2 jarallax"></div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4><?php echo esc_html( $options['about_pg_sec_3_b_txt'] ); ?></h4>
                            <p><?php echo esc_html( $options['about_pg_sec_3_s_txt'] ); ?></p>
                        </div>
                        <div class="cta-btn">
                            <a href="<?php echo esc_html( $options['about_pg_sec_3_btn_url'] ); ?>" class="btn credit-btn box-shadow"><?php echo esc_html( $options['about_pg_sec_3_btn'] ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Team Member Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p><?php echo esc_html( $options['about_team_title'] ); ?></p>
                        <h2><?php echo esc_html( $options['about_team_heading'] ); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php 
                    $members = $options['about_members'];
                    foreach($members as $member) { ?>

                    <!-- Single Team Member Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-team-member-area mb-100">
                            <div class="team-thumb">
                                <img src="<?php echo esc_url($member['about_member_img']['url']); ?>" alt="">
                                <!-- View More -->
                                <div class="view-more">
                                    <a href="<?php echo esc_url($member['about_member_details_link']); ?>"><?php echo esc_html('+', 'credit') ?></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><?php echo esc_html($member['about_member_name']); ?></h5>
                                <h6><?php echo esc_html($member['about_member_position']); ?></h6>
                            </div>
                        </div>
                    </div>

                <?php }
                ?>

            </div>
        </div>
    </section>
    <!-- ##### Team Member Area End ##### -->


<?php get_footer(); ?>