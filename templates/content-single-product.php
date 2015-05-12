<?php while (have_posts()) : the_post(); ?>
    <?php
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <article <?php post_class(); ?>>
        <div class="fullheight" style="background: url('<?php echo $url; ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div class="overlay-product"></div>
            <div class="ui page grid">
                <div class="column">
                    <?php get_template_part('templates/product/preview'); ?>
                </div>
            </div>
        </div>

        <div id="details" class="ui basic segment">
            <div class="ui page grid">
                <div class="column">
                    <br>
                    <?php get_template_part('templates/product/details'); ?>
                </div>
            </div>
        </div>

        <div id="gallery" class="ui basic segment">
            <div class="ui page grid">
                <div class="column">
                    <?php get_template_part('templates/product/gallery'); ?>
                </div>
            </div>
        </div>

        <div class="form">
            <?php get_template_part('templates/components/form'); ?>
        </div>

        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
    </article>
<?php endwhile; ?>
