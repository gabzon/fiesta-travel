<?php
function get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return $matches[1];
}
?>

<section id="about" class="ui basic segment fullheight">
    <div class="segment-content">
        <div class="ui page grid">
            <div class="column">
                <h2 class="ui center aligned header uppercase"><?php _e('about'); ?></h2>

                <?php $user_query = new WP_User_Query(array('role' => 'editor')); ?>

                <?php if ( !empty( $user_query->results ) ) : ?>
                    <div class="ui stackable two column grid">
                        <?php foreach ( $user_query->results as $user ) : ?>
                            <div class="column">
                                <div class="user-image">
                                    <img class="ui image circular" style="display:inline" align="center" src="<? echo get_avatar_url(get_avatar( $user->user_email, 150 )); ?>"/>
                                </div>
                                <h3><?php echo $user->display_name; ?></h3>
                                <p><?php echo get_user_meta($user->ID, 'description', true); ?></p>
                                <div class="user-languages">
                                    <?php if($languages = get_user_meta($user->ID, 'user_languages', false) ) : ?>
                                        <div class="ui horizontal list">
                                            <?php foreach($languages as $language) : ?>
                                                <div class="item">
                                                    <?php _e($language); ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="ui horizontal list">
                                    <?php if(get_user_meta($user->ID, 'user_facebook', true)) : ?>

                                        <a href="<?php echo get_user_meta($user->ID, 'user_facebook', true); ?>">
                                            <div class="ui circular mini facebook icon button">
                                                <i class="facebook icon"></i>
                                            </div>
                                        </a>

                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_twitter', true)) : ?>
                                        <a href="<? echo get_user_meta($user->ID, 'user_twitter', true); ?>">
                                            <div class="ui circular mini twitter icon button">
                                                <i class="twitter square icon"></i>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_pinterest', true)) : ?>
                                        <a href="<?php echo get_user_meta($user->ID, 'user_pinterest', true); ?>">
                                            <div class="ui circular mini pinterest icon button">
                                                <i class="pinterest square icon"></i>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_gplus', true)) : ?>
                                        <a href="<? echo get_user_meta($user->ID, 'user_gplus', true); ?>">
                                            <div class="ui circular mini google plus icon button">
                                                <i class="google plus icon"></i>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_skype', true)) : ?>
                                        <div class="item">
                                            <a href="<?php echo get_user_meta($user->ID, 'user_skype', true); ?>"><i class="skype square icon"></i></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_instagram', true)) : ?>
                                        <div class="item">
                                            <a href="<?php get_user_meta($user->ID, 'user_instagram', true); ?>"><i class="instagram square icon"></i></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="column">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2760.777602124941!2d6.148177999999996!3d46.214879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c6521905b8451%3A0x524bd241924ac13a!2sFiesta+Travel%2C+R%C3%B6schli!5e0!3m2!1sen!2sch!4v1429005082414" width="600" height="400" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
