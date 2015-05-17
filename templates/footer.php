<?php
$agency_options = get_option('agency_settings');
$logo = $agency_options['agency_logo'];
?>

<div id="main-footer" class="ui basic inverted black segment">

    <div class="ui page grid">
        <div class="column">
            <div class="ui stackable five column grid">
                <div class="ui center aligned column">
                    <?php if ($logo): ?>
                        <img class="ui image" src="<?php echo wp_get_attachment_url($logo);?>" width="150" />
                    <?php else: ?>
                        <img src="//placehold.it/200x100" />
                    <?php endif; ?>
                </div>
                <div class="column">
                    <br>
                    <div class="ui medium list">
                        <div class="item">
                            <i class="top aligned home icon"></i>
                            <div class="content">
                                <?php echo $agency_options['agency_address']; ?><br/>
                                <?php echo $agency_options['agency_postal_code']; ?> <?php echo $agency_options['agency_city']; ?><br/>
                                <?php echo $agency_options['agency_country']; ?><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <br>
                    <div class="ui medium list">
                        <?php if ($agency_options['agency_email']) { ?>
                        <div class="item">
                            <i class="mail icon"></i>
                            <div class="content">
                                <?php echo $agency_options['agency_email']; ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if ($agency_options['agency_phone']) { ?>
                            <div class="item">
                                <i class="call icon"></i>
                                <div class="content">
                                    <?php echo $agency_options['agency_phone']; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($agency_options['agency_fax']) { ?>
                            <div class="item">
                                <i class="fax icon"></i>
                                <div class="content">
                                    <?php echo $agency_options['agency_fax']; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="column" id="footer-schedule">
                    <br>
                    <div class="ui medium list">
                        <div class="item">
                            <?php echo $agency_options['agency_schedule']; ?>
                        </div>
                    </div>
                </div>
                <div class="column center aligned">
                    <br>
                    <div class="ui horizontal list">
                        <?php if($agency_options['social_facebook']) : ?>
                            <a class="ui circular facebook icon button" href="<?php echo $agency_options['social_facebook']; ?>">
                                <i class="facebook icon"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($agency_options['social_twitter']) : ?>
                            <a class="ui circular twitter icon button" href="<?php echo $agency_options['social_twitter']; ?>">
                                <i class="twitter icon"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($agency_options['social_pinterest']) : ?>
                            <a class="ui circular pinterest icon button" href="<?php echo $agency_options['social_pinterest']; ?>">
                                <i class="pinterest icon"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($agency_options['social_gplus']) : ?>
                            <a class="ui circular google plus icon button" href="<?php echo $agency_options['social_gplus']; ?>">
                                <i class="google plus icon"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($agency_options['social_skype']) : ?>
                            <a class="ui circular skype icon button" href="<?php echo $agency_options['social_skype']; ?>">
                                <i class="skype icon"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($agency_options['social_instagram']) : ?>
                            <a class="ui circular instagram icon button" href="<?php echo $agency_options['social_instagram']; ?>">
                                <i class="instagram icon"></i>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
