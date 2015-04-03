<?php $query = new WP_Query(array('post_type' => 'product')); ?>


<div class="ui page grid">
    <div class="column">
        <div class="ui steps">
          <div class="step">
            <i class="truck icon"></i>
            <div class="content">
              <div class="title">Planning</div>

            </div>
          </div>
          <div class="step">
            <i class="payment icon"></i>
            <div class="content">
              <div class="title">Research</div>
            </div>
          </div>
          <div class="step">
            <i class="calendar icon"></i>
            <div class="content">
              <div class="title">Analyse</div>
            </div>
          </div>
          <div class="active step">
            <i class="calendar icon"></i>
            <div class="content">
              <div class="title">Creativity</div>
            </div>
          </div>
          <div class="step">
            <i class="calendar icon"></i>
            <div class="content">
              <div class="title">Design</div>
            </div>
          </div>
          <div class="step">
            <i class="mail icon"></i>
            <div class="content">
              <div class="title">Test</div>
            </div>
          </div>
          <div class="step">
            <i class="info icon"></i>
            <div class="content">
              <div class="title">Deploy</div>
            </div>
          </div>
        </div>
    </div>
</div>


<section id="promotion" class="ui basic inverted orange segment fullheight">
    <div class="segment-content">
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
</section>
