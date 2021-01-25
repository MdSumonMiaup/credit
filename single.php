<?php get_header(); ?>

    <?php get_template_part( 'template-parts/content', 'page-banner' ) ?>

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <?php the_post_thumbnail(); ?>
                        <p><?php the_content(); ?></p>
                    </div>

                    <!-- Comment Form Start -->

                    <?php
                        if(comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    ?>

                    <!-- Comment Form End -->

                </div> <!-- Post Details Content Area End -->

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                        
                    <?php get_sidebar('primary-sidebar'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->



<?php get_footer(); ?>