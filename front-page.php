<?php get_template_part('templates/header'); ?>
    <div class="ui page grid">
    <section id="services" class="ui basic inverted fullheight">
        <div class="ui stackable four column page grid">
            <div class="column">
                <h2 class="ui icon header">
                    <img class="circular users icon" src="//placehold.it/150x150" />
                    <div class="content">
                        Pre reservation
                        <div class="sub header">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
                    </div>
                </h2>
            </div>
            <div class="column">
                <h2 class="ui icon header">
                    <img class="circular users icon" src="//placehold.it/150x150" />
                    <div class="content">
                        Luggage
                        <div class="sub header">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
                    </div>
                </h2>
            </div>
            <div class="column">
                <h2 class="ui icon header">
                    <img class="circular users icon" src="//placehold.it/150x150" />
                    <div class="content">
                        Ofertas especiales
                        <div class="sub header">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
                    </div>
                </h2>
            </div>
            <div class="column">
                <h2 class="ui icon header">
                    <img class="circular users icon" src="//placehold.it/150x150" />
                    <div class="content">
                        Special Price for cars
                        <div class="sub header">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
                    </div>
                </h2>
            </div>
        </div>
    </section>

    <section id="promotion" class="ui basic inverted purple segment fullheight">
        <h2 class="ui center aligned header uppercase"><?php _e('promotions'); ?></h2>
        <?php get_template_part('templates/frontpage/promotions'); ?>
    </section>

    <section id="form" class="ui basic inverted red segment fullheight">
        <h2 class="ui center aligned header uppercase"><?php _e('Request'); ?></h2>
        <div class="ui grid form">
            <div class="row">
                <div class="eight wide column">
                    <div class="ui fluid input">
                        <input type="text" placeholder="Destination">
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui fluid input">
                        <input type="text" placeholder="Departure">
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui fluid input">
                        <input type="text" placeholder="Return">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="eight wide column">
                    <div class="ui grid">
                        <div class="row">
                            <div class="eight wide column">
                                <div class="ui fluid input">
                                    <input type="text" placeholder="Adults">
                                </div>
                            </div>
                            <div class="eight wide column">
                                <div class="ui fluid input">
                                    <input type="text" placeholder="Kids">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="eight wide column">
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label>Checkbox</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label>Checkbox</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label>Checkbox</label>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide column">
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label>Checkbox</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label>Checkbox</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label>Checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="ui fluid input">
                        <textarea placeholder="comments" class="ui textarea wide"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <p><?php echo $agency_options['agency_address']; ?></p>
                <p><?php echo $agency_options['agency_city']; ?></p>
                <p><?php echo $agency_options['agency_country']; ?></p>

                <p><?php echo $agency_options['agency_email']; ?></p>
                <p><?php echo $agency_options['agency_phone']; ?></p>
                <p><?php echo $agency_options['agency_fax']; ?></p>
            </div>
            <div class="column">
                <p><?php echo $agency_options['agency_schedule']; ?></p>
            </div>
            <div class="column">

            </div>
        </div>

        <div class="ui stackable three column grid">
            <div class="column">
                <img class="ui image circular center" src="//placehold.it/150x150" />
                <h3>Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            <div class="column">
                <img class="ui image circular center" src="//placehold.it/150x150" />
                <h3>Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            <div class="column">
                <img class="ui image circular center" src="//placehold.it/150x150" />
                <h3>Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>

    </section>
    </div>