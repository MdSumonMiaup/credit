

    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url('<?php echo esc_url(get_theme_mod('credit_subscribe_bg')); ?>');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                <?php get_sidebar('subscribe'); ?>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->
  
  <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About Us</h5>
                        <!-- Nav -->
                        <?php 
                            if (has_nav_menu( 'footer_menu' )) {
                                wp_nav_menu( [
                                    'theme_location' => 'footer_menu',
                                    'container' => 'nav',
                                    'container_class' => '',
                                    'menu_class' => 'footer-nav-ul',
                                    'depth' => '3',
                                ] );
                            }
                        ?>
                    </div>
                </div>
                <?php get_sidebar('footer'); ?>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="<?php echo esc_url( home_url('/') ) ?>" class="footer-logo"><img src="<?php echo esc_url(get_theme_mod('footer_logo')); ?>" alt=""></a>

                            <p>&copy; Developed By <a target="_blank" href="<?php echo esc_url('https://mdsumonmia.me/'); ?>">Sumon</a></p>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href=""><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> Copyright &copy;<script>document.write(new Date().getFullYear());</script>This template is designed with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?php echo esc_url('https://colorlib.com'); ?>" target="_blank">Colorlib</a> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ##### Footer Area Start ##### -->
    
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->

    <!-- Bootstrap js -->
    <!-- All Plugins js -->
    <!-- Active js -->
    <?php wp_footer(); ?>
</body>

</html>