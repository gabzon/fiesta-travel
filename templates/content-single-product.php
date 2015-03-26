<div class="ui page grid">
    <div class="column">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $location_list = wp_get_post_terms(get_the_ID(), 'location', array("fields" => "names"));
            $theme_list = wp_get_post_terms(get_the_ID(), 'theme', array("fields" => "names"));
            ?>
            <article <?php post_class(); ?>>
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="ui stackable two column grid fullheight">
                    <div class="column">
                        <?php the_excerpt(); ?>
                        <a href="#details"><?php _e('Details'); ?></a>
                    </div>
                    <div class="column">
                        <div class="ui divided list">
                            <div class="item">
                                <i class="euro icon"></i>
                                <div class="content">
                                    <span class="header">Price</span>
                                    <div class="description"><?php echo get_post_meta(get_the_ID(), 'product_price', true) ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <i class="calendar icon"></i>
                                <div class="content">
                                    <span class="header">Number of days</span>
                                    <div class="description"><?php echo get_post_meta(get_the_ID(), 'product_number_days', true) ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <i class="flag icon"></i>
                                <div class="content">
                                    <span class="header">Location</span>
                                    <div class="description"><?php echo join(', ', $location_list); ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <i class="map marker icon"></i>
                                <div class="content">
                                    <span class="header">Theme</span>
                                    <div class="description"><?php echo join(', ', $theme_list); ?></div>
                                </div>
                            </div>
                        </div>
                        <button class="ui blue button">Order</button>
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
