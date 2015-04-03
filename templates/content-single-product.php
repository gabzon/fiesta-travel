<div class="ui page grid">
    <div class="column">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $location_list = wp_get_post_terms(get_the_ID(), 'location', array("fields" => "names"));
            $theme_list = wp_get_post_terms(get_the_ID(), 'theme', array("fields" => "names"));
            $gallery = get_post_meta(get_the_ID(), 'product_gallery', false);
            ?>
            <article <?php post_class(); ?>>
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="ui stackable grid fullheight">
                    <div class="row">
                        <div class="sixteen wide column">
                            <div class="owl-carousel owl-theme gallery">
                                <?php foreach ($gallery as $image){ ?>
                                    <div class="item">
                                        <?php echo wp_get_attachment_image($image, array('500', '300')); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="eight wide column">
                            <?php the_excerpt(); ?>
                            <a href="#details"><?php _e('Details'); ?></a>
                        </div>
                        <div class="eight wide column">
                            <div class="ui divided list">
                                <div class="item">
                                    <i class="euro icon"></i>
                                    <div class="content">
                                        <div class="description"><strong>Price</strong>: <?php echo get_post_meta(get_the_ID(), 'product_price', true) ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="calendar icon"></i>
                                    <div class="content">
                                        <div class="description"><strong>Number of days</strong>: <?php echo get_post_meta(get_the_ID(), 'product_number_days', true) ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="flag icon"></i>
                                    <div class="content">
                                        <div class="description"><strong>Location</strong>: <?php echo join(', ', $location_list); ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="map marker icon"></i>
                                    <div class="content">
                                        <div class="description"><strong>Theme</strong>: <?php echo join(', ', $theme_list); ?></div>
                                    </div>
                                </div>
                            </div>
                            <button class="ui blue button">Order</button>
                        </div>
                    </div>
                </div>

                <div id="details" class="entry-content fullheight">
                    <?php the_content(); ?>
                </div>

                <footer>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </footer>
            </article>
        <?php endwhile; ?>
    </div>
</div>
