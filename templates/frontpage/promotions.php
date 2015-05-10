<?php $query = new WP_Query(array('post_type' => 'product')); ?>

<section id="promotion" class="ui basic segment">
    <br>
    <div class="segment-content">
        <div class="ui page grid">
            <div class="column">
                <h2 class="ui center aligned header uppercase"><?php _e('promotions'); ?></h2>
                <?php if ( $query->have_posts() ) : ?>
                    <div id="promotions-crousel">
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="item promotion-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="overlay"></div>
                                    <?php the_post_thumbnail('agency-promotion'); ?>
                                    <div class="promotion-content">
                                        <h2 class="title"><?php the_title(); ?></h2>
                                        <span class="price"><?php echo get_post_meta(get_the_ID(), 'product_price', true); ?></span>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
