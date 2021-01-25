<?php 

/**
 * Adds Foo_Widget widget.
 */
class Custom_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Custom Widget', 'credit' ), // Name
			array( 'description' => esc_html__( 'A Widget For Latest News', 'credit' ), ) // Args
		);
    }
    

    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'credit' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title:', 'credit' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function output() { ?>
			<div class="credit-tabs-content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Popular</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                        <div class="credit-tab-content">
                            <!-- Single News Area -->
                                            
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 3, // Number of recent posts thumbnails to display
                                'post_status' => 'publish' // Show only the published posts
                            ));
                            foreach($recent_posts as $post) : ?>
                                    <div class="single-news-area d-flex align-items-center">
                                        <div class="news-thumbnail">
                                            <?php echo get_the_post_thumbnail($post['ID']); ?>
                                        </div>
                                        <div class="news-content">
											<span><?php echo get_the_date('F j Y'); ?></span>
                                            <a href="<?php echo get_permalink($post['ID']) ?>"><?php echo get_the_title($post['ID']); ?></a>
                                            <div class="news-meta">
                                                <a href="" class="post-author">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/pencil.png" alt="">
                                                    <?php echo get_the_author_meta( 'display_name', $post['post_author'] ); ?>
                                                </a>
                                                <a href="" class="post-date">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/calendar.png" alt="">
                                                    <?php echo get_the_time('F j'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php endforeach; wp_reset_query(); ?>
                            <!-- single-news-area -->
                        </div> <!-- credit-tab-content -->
                    </div> <!-- tab-pane fade --> 

                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                        <div class="credit-tab-content">

                            <!-- Single News Area -->
                            <?php setPostViews(get_the_ID()); ?>
                            <?php
                                // query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=3');
                                query_posts(array(
                                    'meta_key' => 'post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC',
                                    'posts_per_page' => '3',
                                ));
                                                
                                if (have_posts()) : while (have_posts()) : the_post();
                                ?>
                                    <div class="single-news-area d-flex align-items-center">
                                        <div class="news-thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="news-content">
											<span><?php echo get_the_date('F j Y'); ?></span>
                                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                            <div class="news-meta">
                                                <a href="" class="post-author">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/pencil.png" alt="">
                                                    <?php the_author(); ?>
                                                </a>
                                                <a href="" class="post-date">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/calendar.png" alt="">
                                                    <?php echo get_the_date('F j'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile; endif;
                                wp_reset_query();
                            ?>
                            <!-- single-news-area -->
                        </div> <!-- credit-tab-content -->
                    </div> <!-- tab-pane fade --> 
                </div> <!-- #myTabContent -->
            </div> <!-- credit-tabs-content -->
		<?php };
		echo output();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget( 'Custom_Widget' );
});


/**
 * Lastest News Widgets ----------------------------------------------------
 */
class Latest_News extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'latest_news', // Base ID
			esc_html__( 'Latest News', 'credit' ), // Name
			array( 'description' => esc_html__( 'A Widget For Latest News', 'credit' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Latest News', 'credit' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title:', 'credit' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function result() { ?>
			<div class="latest-news-content">
                <!-- Single News Area -->
                                            
				<?php
				$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 3, // Number of recent posts thumbnails to display
					'post_status' => 'publish' // Show only the published posts
				));
				foreach($recent_posts as $post) : ?>
						<div class="single-news-area d-flex align-items-center">
							<div class="news-thumbnail thumb-footer">
								<?php echo get_the_post_thumbnail($post['ID']); ?>
							</div>
							<div class="news-content">
								<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo get_the_title($post['ID']); ?></a>
								<div class="news-meta">
									<a href="" class="post-author">
										<img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/pencil.png" alt="">
										<?php echo get_the_author_meta( 'display_name', $post['post_author'] ); ?>
									</a>
									<a href="" class="post-date">
										<img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/calendar.png" alt="">
										<?php echo get_the_time('F j'); ?>
									</a>
								</div>
							</div>
						</div>
				<?php endforeach; wp_reset_query(); ?>
				<!-- single-news-area -->
			</div> <!-- Latest News content -->
		<?php };
		echo result();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget( 'Latest_News' );
});


/**
 * Popular News Widgets ----------------------------------------------------
 */
class Popular_News extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'popular_news', // Base ID
			esc_html__( 'Popular News', 'credit' ), // Name
			array( 'description' => esc_html__( 'A Widget For Popular News', 'credit' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Popular News', 'credit' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title:', 'credit' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function result_popular() { ?>
			<div class="popular-news-content">

			<!-- Single News Area -->
			<?php setPostViews(get_the_ID()); ?>
			<?php
				// query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=3');
				query_posts(array(
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
					'posts_per_page' => '3',
				));
								
				if (have_posts()) : while (have_posts()) : the_post();
				?>
					<div class="single-news-area d-flex align-items-center">
						<div class="news-thumbnail thumb-footer">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="news-content">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							<div class="news-meta">
								<a href="" class="post-author">
									<img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/pencil.png" alt="">
									<?php the_author(); ?>
								</a>
								<a href="" class="post-date">
									<img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/calendar.png" alt="">
									<?php echo get_the_date('F j'); ?>
								</a>
							</div>
						</div>
					</div>
				<?php
				endwhile; endif;
				wp_reset_query();
			?>
			<!-- single-news-area -->
			</div> <!-- popular-news-content -->
		<?php };
		echo result_popular();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget('Popular_News');
});

/**
 * Subscribe Widgets ----------------------------------------------------
 */
class Subscribe extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'subscribe', // Base ID
			esc_html__( 'Subscribe', 'credit' ), // Name
			array( 'description' => esc_html__( 'Subscribe Widget', 'credit' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Subscribe to our newsletter', 'credit' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title:', 'credit' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function subscribe_output() { ?>
			<div class="emaillist">
				<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
			</div>
		<?php };
		echo subscribe_output();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget('Subscribe');
});






/**
 * The News Widgets ----------------------------------------------------
 */
class The_News extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'the_news', // Base ID
			esc_html__( 'The News', 'credit' ), // Name
			array( 'description' => esc_html__( 'A Widget For Popular News', 'credit' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'The News', 'credit' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'The News:', 'credit' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function result_the_news() { ?>

			<!-- Single News Area -->
			<?php setPostViews(get_the_ID()); ?>
			<?php
				// query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=3');
				query_posts(array(
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
					'posts_per_page' => '3',
				));
								
				if (have_posts()) : while (have_posts()) : the_post();

				?>
					<div class="single-news-area d-flex align-items-center">
						<div class="news-thumbnail">
							<?php the_post_thumbnail('custom-size'); ?>
						</div>
						<div class="news-content">
							<span><?php echo get_the_date('F j Y'); ?></span>
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							<div class="news-meta">
								<a href="" class="post-author">
									<img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/pencil.png" alt="">
									<?php the_author(); ?>
								</a>
								<a href="" class="post-date">
									<img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/calendar.png" alt="">
									<?php echo get_the_date('F j'); ?>
								</a>
							</div>
						</div>
					</div>
				<?php
				endwhile; endif;
				wp_reset_query();
			?>
			<!-- single-news-area -->
		<?php };
		echo result_the_news();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget('The_News');
});

/**
 * Contact Info Widgets ----------------------------------------------------
 */
class Contact_Info extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'contact_info', // Base ID
			esc_html__( 'Contact Info', 'credit' ), // Name
			array( 'description' => esc_html__( 'A Widget For Contact Info', 'credit' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Get In Touch', 'credit' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Get In Touch:', 'credit' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function result_contact_info() { ?>

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
						<span>fdhjfdgh</span>
					</div>
				</div>
			</div> <!-- / Contact Content -->

		<?php };
		echo result_contact_info();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget('Contact_Info');
});