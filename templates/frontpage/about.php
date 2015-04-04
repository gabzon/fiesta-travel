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
                    <div class="ui stackable three column grid">
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
                                        <div class="item">
                                            <a href="<? echo get_user_meta($user->ID, 'user_twitter', true); ?>">
                                                <i class="twitter square icon"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_pinterest', true)) : ?>
                                        <div class="item">
                                            <a href="<?php echo get_user_meta($user->ID, 'user_pinterest', true); ?>"><i class="pinterest square icon"></i></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(get_user_meta($user->ID, 'user_gplus', true)) : ?>
                                        <div class="item">
                                            <a href="<? echo get_user_meta($user->ID, 'user_gplus', true); ?>"><i class="google plus square icon"></i></a>
                                        </div>
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
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
