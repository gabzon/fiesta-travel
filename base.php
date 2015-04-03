<?php

namespace Roots\Sage;
use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      //get_template_part('templates/header');
    ?>

    <?php if (Config\display_sidebar()) : ?>
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
  </body>
</html>
