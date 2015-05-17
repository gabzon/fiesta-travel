<?php
$user_query = new WP_User_Query(array('role' => 'editor'));
$agency_options = get_option('agency_settings');
?>

<?php if ( !empty( $user_query->results ) ) : ?>
    <div class="ui stackable two column grid">
        <?php foreach ( $user_query->results as $user ) : ?>
            <div class="column center aligned">
                <div class="user-image">
                    <?php
                    $pictureID = get_user_meta($user->ID, 'user_picture', true);
                    if($pictureID){
                        echo wp_get_attachment_image($pictureID, array(150,150), false, array('class' => 'ui image circular centered'));
                    }
                    ?>
                </div>
                <h3> <?php echo $user->display_name; ?> </h3>
                <div class="user-languages">
                    <?php if($languages = get_user_meta($user->ID, 'user_languages', false) ) : ?>
                        <div class="ui horizontal list">
                            <?php foreach($languages as $language) : ?>
                                <div class="item">
                                    <?php echo ucwords(__($language)); ?>
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
                        <a href="<? echo get_user_meta($user->ID, 'user_skype', true); ?>">
                            <div class="ui circular mini skype icon button">
                                <i class="skype icon"></i>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if(get_user_meta($user->ID, 'user_instagram', true)) : ?>
                        <a href="<? echo get_user_meta($user->ID, 'user_instagram', true); ?>">
                            <div class="ui circular mini instagram icon button">
                                <i class="instagram icon"></i>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="column">
            <?php $agency_description = $agency_options['agency_description']; ?>
            <?php if ($agency_description): ?>
                <?php echo $agency_description; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
