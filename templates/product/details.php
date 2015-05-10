<?php
$product_hosting = get_post_meta(get_the_ID(), 'product_hosting', true);
$product_flights = get_post_meta(get_the_ID(), 'product_flights', true);
$product_included = get_post_meta(get_the_ID(), 'product_included', true);
$product_not_included = get_post_meta(get_the_ID(), 'product_not_included', true);
$product_cancelation = get_post_meta(get_the_ID(), 'product_cancelation', true);
$product_payment = get_post_meta(get_the_ID(), 'product_payment', true);
?>

<div class="ui top attached tabular menu">
    <div class="active item" data-tab="tab-itinerary"><?php _e('Itinerary', 'sage'); ?></div>

    <?php if($product_hosting) : ?>
    <div class="item" data-tab="tab-hosting"><?php _e('Hosting', 'sage'); ?></div>
    <?php endif; ?>

    <?php if($product_flights) : ?>
    <div class="item" data-tab="tab-flights"><?php _e('Flights', 'sage'); ?></div>
    <?php endif; ?>

    <?php if($product_included || $product_not_included || $product_cancelation) : ?>
    <div class="item" data-tab="tab-info"><?php _e('Additional info', 'sage'); ?></div>
    <?php endif; ?>

    <?php if($product_payment) : ?>
    <div class="item" data-tab="tab-payment"><?php _e('Payment', 'sage'); ?></div>
    <?php endif ?>
</div>
<div class="ui bottom attached active tab segment" data-tab="tab-itinerary">
    <?php the_content(); ?>
</div>

<?php if($product_hosting) : ?>
<div class="ui bottom attached tab segment" data-tab="tab-hosting">
    <?php echo $product_hosting ?>
</div>
<?php endif; ?>

<?php if($product_flights) : ?>
<div class="ui bottom attached tab segment" data-tab="tab-flights">
    <?php echo $product_flights ?>
</div>
<?php endif; ?>

<?php if($product_included || $product_not_included || $product_cancelation) : ?>
<div class="ui bottom attached tab segment" data-tab="tab-info">
    <?php if($product_included) : ?>
    <h4><?php _e('Included', 'sage'); ?></h4>
    <?php echo $product_included ?>
    <?php endif; ?>
    <br/>
    <?php if($product_not_included) : ?>
    <h4><?php _e('Not Included', 'sage'); ?></h4>
    <?php echo $product_not_included; ?>
    <?php endif; ?>
</div>
<?php endif;?>

<?php if($product_payment) : ?>
<div class="ui bottom attached tab segment" data-tab="tab-payment">
    <?php echo $product_payment; ?>
    <br/>
    <?php if($product_cancelation) : ?>
        <h4><?php _e('Cancelation', 'sage'); ?></h4>
        <?php echo $product_cancellation; ?>
    <?php endif; ?>
</div>
<?php endif; ?>
