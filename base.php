<?php

namespace Roots\Sage;
use Roots\Sage\Config;
use Roots\Sage\Wrapper;

function sevinci_sidebar(){
    if (is_page_template('template-custom.php')){
        return false;
    }else if (is_page_template('catalog.php')){
        return false;
    }else{
        return true;
    }
}

?>

<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
    <?php get_template_part('templates/sidebar-menu'); ?>
    <div class="pusher">
        <!--[if lt IE 9]>
        <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
    </div>
    <![endif]-->
    <?php
    do_action('get_header');
    if(is_singular('product')){
        get_template_part('templates/header/header-product');
    }else{
        get_template_part('templates/header/header-scroll');
    }

    ?>


    <?php if (Config\display_sidebar() && sevinci_sidebar()) : ?>
        <div class="ui two column grid stackable">
            <div class="twelve wide column">
                <?php include Wrapper\template_path(); ?>
            </div>
            <div class="four wide column">
                <aside class="sidebar" role="complementary">
                    <?php include Wrapper\sidebar_path(); ?>
                </aside><!-- /.sidebar -->
            </div>
        </div>
    <?php else: ?>
        <?php include Wrapper\template_path(); ?>
    <?php endif; ?>

    <?php
    get_template_part('templates/footer');
    wp_footer();
    ?>
</div>
</body>
</html>
