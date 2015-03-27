<section id="about" class="ui basic inverted green segment fullheight">
    <div class="segment-content">
        <div class="ui page grid">
            <h2 class="ui center aligned header uppercase"><?php _e('about'); ?></h2>

            <?php $user_query = new WP_User_Query(array('role' => 'editor')); ?>

            <?php if ( !empty( $user_query->results ) ) : ?>
                <div class="ui stackable three column grid">
                    <?php foreach ( $user_query->results as $user ) : ?>
                        <div class="column">
                            <img class="ui image circular center" src="http://www.phxnews.com/wp-content/uploads/2015/01/Woman_Call_Center.jpg" />
                            <h3><?php echo $user->display_name; ?></h3>
                            <p><?php echo get_user_meta($user->ID, 'description', true); ?></p>
                            <?php if($languages = get_user_meta($user->ID, 'user_languages', false) ) : ?>
                                <div class="ui horizontal list">
                                    <?php foreach($languages as $language) : ?>
                                        <div class="item">
                                            <?php _e($language); ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <div class="ui horizontal list">
                                <?php if(get_user_meta($user->ID, 'user_facebook', true)) : ?>
                                    <div class="item">
                                        <a href="<?php echo get_user_meta($user->ID, 'user_facebook', true); ?>">F<i class="facebook square icon"></i></a>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_user_meta($user->ID, 'user_twitter', true)) : ?>
                                    <div class="item">
                                        <a href="<? echo get_user_meta($user->ID, 'user_twitter', true); ?>">T<i class="twitter square icon"></i></a>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_user_meta($user->ID, 'user_pinterest', true)) : ?>
                                    <div class="item">
                                        <a href="<?php echo get_user_meta($user->ID, 'user_pinterest', true); ?>">P<i class="pinterest square icon"></i></a>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_user_meta($user->ID, 'user_gplus', true)) : ?>
                                    <div class="item">
                                        <a href="<? echo get_user_meta($user->ID, 'user_gplus', true); ?>">G<i class="google plus square icon"></i></a>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_user_meta($user->ID, 'user_skype', true)) : ?>
                                    <div class="item">
                                        <a href="<?php echo get_user_meta($user->ID, 'user_skype', true); ?>">S<i class="skype square icon"></i></a>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_user_meta($user->ID, 'user_instagram', true)) : ?>
                                    <div class="item">
                                        <a href="<?php get_user_meta($user->ID, 'user_instagram', true); ?>">I<i class="instagram square icon"></i></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
