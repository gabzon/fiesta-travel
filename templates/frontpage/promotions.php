<?php
$query = new WP_Query(
    array(
        'post_type' => 'product'
    )
);

if ( $query->have_posts() ) : ?>
    <div id="promotions-crousel">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="item promotion-item">,
            <a href="<?php the_permalink(); ?>" class="">
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