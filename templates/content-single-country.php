<?php
$post_id = get_the_ID();
$title = get_the_title($post_id);
$flag = get_post_meta($post_id,'country_flag');
$capital = get_post_meta($post_id,'country_capital',true);
$monnaie = get_post_meta($post_id,'country_currency',true);
$langues = get_post_meta($post_id,'country_language',true);
$religions = get_post_meta($post_id,'country_religion',true);
$surface = get_post_meta($post_id,'country_surface',true);
$population = get_post_meta($post_id,'country_population',true);
$map = get_post_meta($post_id,'country_map');

$products = get_posts(array(
    'post_type'     => 'product',
    'numberposts'   => -1,
    'tax_query'     => array(
        array(
            'taxonomy'  => 'location',
            'field'     => 'slug',
            'terms'     => $post->post_name
        )
    )
));

?>

<div class="ui page grid">
    <div class="column">
        <br>
        <div id="<?php echo $post->post_name ?>" class="ui four column grid stackable dimmable-image">
            <br>
            <h2><?php _e('Offres','sage'); ?></h2>
            <hr>
            <?php foreach ($products as $p): ?>
                <div class="column">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), 'single-post-thumbnail' ); ?>
                    <div class="dimmable image">
                        <div class="ui dimmer">
                            <div class="content">
                                <div class="center">
                                    <a class="ui inverted button"  href="<?php echo get_permalink( $p->ID ); ?>"><?php _e('En savoir plus','sage'); ?></a>
                                </div>
                            </div>
                        </div>
                        <img class="ui image" src="<?php echo $image[0]; ?>" alt="" />
                    </div>
                    <h3 class="front-title"><?php echo $p->post_title; ?></h3>

                </div>
            <?php endforeach; ?>
        </div>


        <?php while (have_posts()) : the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>
            <br>
            <div class="ui two column grid stackable">
                <div class="four wide column">
                    <img class="ui image" src="<?php echo wp_get_attachment_url(end($flag)); ?>"/>
                    <table class="ui basic table">
                        <tr>
                            <td><h5>Capital</h5></td><td><?php echo $capital; ?></td>
                        </tr>
                        <tr>
                            <td><h5>Monnaie</h5></td><td><?php echo $monnaie; ?></td>
                        </tr>
                        <tr>
                            <td><h5>Religions</h5></td><td><?php echo $religions; ?></td>
                        </tr>
                        <tr>
                            <td><h5>Surface</h5></td><td><?php echo $surface; ?></td>
                        </tr>
                        <tr>
                            <td><h5>Population</h5></td><td><?php echo $population ?></td>
                        </tr>
                        <tr>
                            <td><h5>Langues</h5></td><td><?php echo $langues; ?></td>
                        </tr>
                    </table>
                    <img class="ui image" src="<?php echo wp_get_attachment_url(end($map)); ?>"/>
                </div>
                <div class="twelve wide column">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
