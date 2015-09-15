<?php
    $product_type = wp_get_post_terms($post->ID,'product_type');
    $numItems = count($product_type);
    $i = 0;
?>
<br>
<br>
<div class="ui grid">
    <div class="six wide column">
        <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <img src="<?php echo $featured_image; ?> " alt="" class="ui large image"/>
    </div>
    <div class="ten wide column">
        <header>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php //get_template_part('templates/entry-meta'); ?>
            <?php if ($product_type): ?>
                <?php foreach ($product_type as $type): ?>
                    <?php if (++$i != $numItems): ?>
                        <h3><?php echo $type->name . ','; ?></h3>
                    <?php else: ?>
                        <h3><?php echo $type->name; ?></h3>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <h1><?php echo 'CHF '. get_post_meta($post->ID,'product_price',true); ?> </h1>
    </div>
</div>
