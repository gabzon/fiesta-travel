<?php
$location_list = wp_get_post_terms(get_the_ID(), 'location', array("fields" => "names"));
$theme_list = wp_get_post_terms(get_the_ID(), 'theme', array("fields" => "names"));
?>
<br><br>

<header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
</header>
<br>
<div class="ui two column grid">
    <div class="eleven wide column">
        <?php the_excerpt(); ?>
        <a href="#details" class="ui button">
            <?php _e('Details','sage'); ?>&nbsp;
            <i class="down arrow icon"></i>
        </a>
    </div>
    <div class="five wide column">
        <table class="ui table">
            <tbody>
                <tr>
                    <td><i class="euro icon"></i> <strong>Price</strong></td>
                    <td><?php echo get_post_meta(get_the_ID(), 'product_price', true); ?></td>
                </tr>
                <tr>
                    <td><i class="calendar icon"></i><strong>Number of days</strong></td>
                    <td><?php $number_days = get_post_meta(get_the_ID(), 'product_number_days', true); ?>
                        <?php echo $number_days['product_days'][0].' '.__('Days', 'sage'); ?>
                        /
                        <?php echo $number_days['product_nights'][0].' '.__('Nights', 'sage'); ?>
                    </td>
                </tr>
                <tr>
                    <td><i class="flag icon"></i><strong>Location</strong></td>
                    <td><?php echo join(', ', $location_list); ?></td>
                </tr>
                <tr>
                    <td><i class="map marker icon"></i><strong>Location</strong></td>
                    <td><?php echo join(', ', $location_list); ?></td>
                </tr>
                <tr>
                    <td><i class="flag icon"></i><strong>Theme</strong></td>
                    <td><?php echo join(', ', $theme_list); ?></td>
                </tr>
                <tfoot class="full-width">
                    <tr>
                        <th colspan="2">
                            <button class="fluid ui blue button">
                                <i class="shop icon"></i>
                                <?php _e('Order','sage'); ?>
                            </button>
                        </th>
                    </tr>
                </tfoot>
            </tbody>
        </table>
    </div>
</div>
