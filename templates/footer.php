<?php
$agency_options = get_option('agency_settings');
$logo = $agency_options['agency_logo'];
?>

<footer id="main-footer" class="ui basic inverted red segment">

    <div class="ui stackable four column grid">
        <div class="column">
            <?php if ($logo): ?>
                <img class="ui image" src="<?php echo $logo;?>" />
            <?php else: ?>
                <img src="//placehold.it/200x100" />
            <?php endif; ?>
        </div>
        <div class="column">
            <p>
                <?php echo $agency_options['agency_address']; ?>,
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

</footer>
