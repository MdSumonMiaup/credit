<div class="single-blog-area mb-70">
                            <div class="blog-thumbnail">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="blog-content">
                                <span><?php echo get_the_date('F j Y'); ?></span>
                                <a href="<?php the_permalink() ?>" class="post-title"><?php echo get_the_title(); ?></a>
                                <div class="blog-meta">
                                    <a href="" class="post-author">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/pencil.png" alt=""> 
                                    <?php the_author_posts_link(); ?></a>
                                    <a href="" class="post-date">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/calendar.png" alt="">
                                    <?php echo get_the_date('F j'); ?></a>
                                </div>
                                <p><?php
                                echo wp_trim_words( get_the_content(), 25 ); ?>
                                <a href="<?php the_permalink(); ?>" class="readmore-btn"><?php echo esc_html__( 'Read More', 'credit' ); ?></a>
                                </p>
                            </div>
                        </div>