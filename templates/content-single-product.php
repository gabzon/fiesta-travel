<div class="ui page grid">
    <div class="column">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <div class="fullheight">
                    <?php get_template_part('templates/product/details'); ?>
                </div>

                <div id="details" class="entry-content">
                    <?php get_template_part('templates/product/gallery'); ?>
                    <?php the_content(); ?>
                </div>

                <div class="form">
                    <?php get_template_part('templates/frontpage/form'); ?>
                </div>

                <footer>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </footer>
            </article>
        <?php endwhile; ?>
    </div>
</div>
