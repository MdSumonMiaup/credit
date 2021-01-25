<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    </header>
    <div class="entry-content">
        <p><?php the_content(); ?></p>
        <?php the_tags(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>