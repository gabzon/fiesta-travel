<section id="about" class="ui basic inverted green segment fullheight">
    <h2 class="ui center aligned header uppercase"><?php _e('about'); ?></h2>
    <?php
    $agency_options = get_option('agency_settings');
    $logo = $agency_options['logo'];
    ?>
    <div class="ui stackable four column grid">
        <div class="column">
            <?php if ($logo) { ?>
                <img src="<?php echo $logo;?>" />
            <?php }else{ ?>
                <img src="//placehold.it/200x100" />
            <?php } ?>
        </div>
        <div class="column">
            <p><?php echo $agency_options['agency_address']; ?>,
                <?php echo $agency_options['agency_postal_code']; ?>,
                <?php echo $agency_options['agency_city']; ?>
                <?php echo $agency_options['agency_country']; ?>
            </p>

            <p><?php echo $agency_options['agency_email']; ?></p>
            <p><?php echo $agency_options['agency_phone']; ?></p>
            <p><?php echo $agency_options['agency_fax']; ?></p>
        </div>
        <div class="column">
            <p><?php echo nl2br($agency_options['agency_schedule']); ?></p>
        </div>
        <div class="column">
            <div class="ui horizontal list">
                <?php if($agency_options['social_facebook']) : ?>
                <div class="item">
                    <a href="<?php echo $agency_options['social_facebook']; ?>">F<i class="facebook square icon"></i></a>
                </div>
                <?php endif; ?>
                <?php if($agency_options['social_twitter']) : ?>
                <div class="item">
                    <a href="<? echo $agency_options['social_twitter']; ?>">T<i class="twitter square icon"></i></a>
                </div>
                <?php endif; ?>
                <?php if($agency_options['social_pinterest']) : ?>
                <div class="item">
                    <a href="<?php echo $agency_options['social_pinterest']; ?>">P<i class="pinterest square icon"></i></a>
                </div>
                <?php endif; ?>
                <?php if($agency_options['social_gplus']) : ?>
                <div class="item">
                    <a href="<? echo $agency_options['social_gplus']; ?>">G<i class="google plus square icon"></i></a>
                </div>
                <?php endif; ?>
                <?php if($agency_options['social_skype']) : ?>
                <div class="item">
                    <a href="<?php echo $agency_options['social_skype']; ?>">S<i class="skype square icon"></i></a>
                </div>
                <?php endif; ?>
                <?php if($agency_options['social_instagram']) : ?>
                <div class="item">
                    <a href="<?php $agency_options['social_instagram']; ?>">I<i class="instagram square icon"></i></a>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <?php
    $user_query = new WP_User_Query(
        array(
            'role' => 'editor'
        )
    );
    ?>

    <?php if ( !empty( $user_query->results ) ) : ?>
        <div class="ui stackable three column grid">
        <?php foreach ( $user_query->results as $user ) : ?>
            <div class="column">
                <img class="ui image circular center" src="//placehold.it/150x150" />
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
</section>