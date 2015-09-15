<!-- http://www.makeuseof.com/tag/tutorial-ajax-wordpress/ -->
<section id="request" class="ui basic segment" >
    <div class="segment-content">
        <div class="ui page grid">
            <div class="column">
                <h2 class="ui center aligned header uppercase segment-content"><?php _e('Request','sage'); ?></h2>
                <form class="ui form" type="post" action="" id="newRequest" ng-app>

                    <!-- Contact information -->
                    <div class="ui three column grid stackable">
                        <div class="column">
                            <div class="ui left icon input">
                                <input name="fullname" type="text" placeholder="<?php _e('Full name','sage'); ?>" />
                                <i class="user icon"></i>
                            </div>
                        </div>

                        <div class="column">
                            <div class="ui left icon input">
                                <input name="email" type="text" placeholder="<?php _e('Email','sage'); ?>" />
                                <i class="envelope icon"></i>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui left icon input">
                                <input name="phone" type="text" placeholder="<?php _e('Phone','sage'); ?>" />
                                <i class="call icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Destination information -->
                    <div class="ui three column grid stackable">
                        <div class="eight wide column">
                            <div class="ui fluid input field">
                                <div class="ui left icon input">
                                    <input name="destination" id="destination" type="text" placeholder="<?php _e('Destination','sage'); ?>" />
                                    <i class="marker icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="four wide column">
                            <div class="ui fluid input icon field">
                                <i class="calendar icon"></i>
                                <input name="departure" id="departure" type="text" class="datepicker" placeholder="<?php _e('Departure date','sage'); ?>">
                            </div>
                        </div>
                        <div class="four wide column">
                            <div class="ui fluid input icon field">
                                <input name="return" id="return" type="text" class="datepicker" placeholder="<?php _e('Return date','sage'); ?>">
                                <i class="calendar icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Budget and Companions -->
                    <div class="ui four column grid stackable">
                        <div class="column">
                            <div id="price-slider"></div>
                            <input type="hidden" name="budget" id="budget">
                        </div>
                        <div class="column">
                            <div class="ui fluid input field">
                                <select name="companion" id="companion" class="ui dropdown">
                                    <option value=""><?php _e('Traveling with','sage'); ?></option>
                                    <option value="alone"><?php _e('Alone','sage'); ?></option>
                                    <option value="couple"><?php _e('In couple','sage'); ?></option>
                                    <option value="family"><?php _e('Family','sage'); ?></option>
                                    <option value="friends"><?php _e('Friends','sage'); ?></option>
                                    <option value="group"><?php _e('Group','sage'); ?></option>
                                    <option value="colleagues"><?php _e('Collegues','sage'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid input field">
                                <select name="adults" id="adults" class="ui dropdown">
                                    <option value=""><?php _e('Adults','sage'); ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="more"><?php _e('More','sage'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid input field" ng-hide="companion">
                                <select name="kids" id="kids" class="ui dropdown">
                                    <option value=""><?php _e('Kids','sage'); ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="more"><?php _e('More','sage'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Préférences -->
                    <div class="ui one column grid">
                        <div class="column">
                            <div class="ui fluid input field">
                                <textarea name="preferences" id="preferences" placeholder="<?php _e('Preferences','sage'); ?>" class="ui textarea wide"></textarea>
                            </div>
                        </div>
                    </div>


                    <!-- Checkboxes-->
                    <div class="ui four column grid stackable">
                        <div class="column">
                            <div class="ui fluid big label colorless">
                                <input name="flights" type="checkbox" ng-model="flight"/> &nbsp;&nbsp;<i class="plane icon"></i><?php _e('Flights','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid big label colorless">
                                <input name="hosting" type="checkbox" ng-model="hosting"/> &nbsp;&nbsp;<i class="building icon"></i><?php _e('Hosting','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid big label colorless">
                                <input name="activities" type="checkbox" ng-model="activity"/> &nbsp;&nbsp;<i class="cocktail icon"></i><?php _e('Activities','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid big label colorless">
                                <input name="transport" type="checkbox" ng-model="transport"/> &nbsp;&nbsp;<i class="car icon"></i><?php _e('Transport','sage'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Fligth information -->
                    <div id="flight-options" ng-show="flight">
                        <div class="ui one column grid">
                            <h4 class="ui horizontal header divider">
                                <i class="plane icon"></i>
                                <?php _e('Flight options','sage') ?>
                            </h4>
                        </div>
                        <div class="ui four column grid stackable">
                            <div class="column">
                                <div class="ui basic fluid large label colorless">
                                    <input name="class[]" type="checkbox" value="economy" checked="checked"/> &nbsp;&nbsp;<?php _e('Economy','sage'); ?>
                                </div>
                                <div class="ui basic fluid large label colorless">
                                    <input name="class[]" type="checkbox" value="business"/> &nbsp;&nbsp;<?php _e('Business Class','sage'); ?>
                                </div>
                                <div class="ui basic fluid large label colorless">
                                    <input name="class[]" type="checkbox" name="first"/> &nbsp;&nbsp;<?php _e('First Class','sage'); ?>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui basic fluid large label colorless">
                                    <input name="seat" type="radio" value="either" checked="checked"/> &nbsp;&nbsp;<?php _e('Either','sage'); ?>
                                </div>
                                <div class="ui basic fluid large label colorless">
                                    <input name="seat" type="radio" value="aisle"/> &nbsp;&nbsp;<?php _e('Aisle','sage'); ?>
                                </div>
                                <div class="ui basic fluid large label colorless">
                                    <input name="seat" type="radio" value="windows"/> &nbsp;&nbsp;<?php _e('Windows','sage'); ?>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui basic fluid large label colorless">
                                    <input name="flight-options[]" type="checkbox" value="vegetarian-meal"/> &nbsp;&nbsp; <i class="leaf icon"></i> <?php _e('Vegeterian meal','sage'); ?>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui basic fluid large label colorless">
                                    <input name="flight-options[]" type="checkbox" value="special-assistance"/> &nbsp;&nbsp;<i class="handicap icon"></i> <?php _e('Special assistance','sage'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hosting information -->
                    <div class="ui four column grid" ng-show="hosting">
                        <h4 class="ui horizontal header divider">
                            <i class="building icon"></i>
                            <?php _e('Hosting options','sage') ?>
                        </h4>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="internet"/> &nbsp;&nbsp;<?php _e('Internet','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="breakfast"/> &nbsp;&nbsp;<?php _e('Breakfast','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="parking"/> &nbsp;&nbsp;<?php _e('Parking','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="swiming"/> &nbsp;&nbsp;<?php _e('Swiming Pool','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="laundry"/> &nbsp;&nbsp;<?php _e('Laundry Room','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="fitness"/> &nbsp;&nbsp;<?php _e('Gym/Fitness','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="Space wellbeing"/> &nbsp;&nbsp;<?php _e('Space Well-being','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-options[]" type="checkbox" value="Conference room"/> &nbsp;&nbsp;<?php _e('Conference room','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="host-type[]" value="hotel" type="checkbox" ng-model="hotel"/> &nbsp;&nbsp;<?php _e('Hotel','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-type[]" value="appartment" type="checkbox"/> &nbsp;&nbsp;<?php _e('House/Appartment','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-type[]" value="camping" type="checkbox"/> &nbsp;&nbsp;<?php _e('Homestay','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="host-type[]" value="homestay" type="checkbox"/> &nbsp;&nbsp;<?php _e('Camping','sage'); ?>
                            </div>
                        </div>
                        <div class="column" ng-show="hotel">
                            <div class="ui basic fluid large label colorless">
                                <input name="hotel[]" value="5-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="hotel[]" value="4-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="hotel[]" value="3-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="hotel[]" value="2-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i>
                            </div>
                        </div>
                    </div>


                    <!-- Activities information -->
                    <div class="ui four column grid stackable" ng-show="activity">
                        <h4 class="ui horizontal header divider">
                            <i class="cocktail icon"></i>
                            <?php _e('Theme & activities options','sage'); ?>
                        </h4>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="culture" type="checkbox">&nbsp;&nbsp;<?php _e('Culture & History','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="business" type="checkbox">&nbsp;&nbsp;<?php _e('Business','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="fun" type="checkbox">&nbsp;&nbsp;<?php _e('Fun & Entertainment','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="romance" type="checkbox">&nbsp;&nbsp;<?php _e('Romance','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="adventure" type="checkbox">&nbsp;&nbsp;<?php _e('Adventure','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="fun" type="checkbox">&nbsp;&nbsp;<?php _e('Fun & Entertainment','sage'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="relaxation" type="checkbox">&nbsp;&nbsp;<?php _e('Relaxation','sage'); ?>
                            </div>
                            <div class="ui basic fluid large label colorless">
                                <input name="theme[]" value="discovery" type="checkbox">&nbsp;&nbsp;<?php _e('Discovery & Leisure','sage'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Transport information -->
                    <div class="ui four column grid stackable" ng-show="transport">
                        <h4 class="ui horizontal header divider">
                            <i class="car icon"></i>
                            <?php _e('Transport options','sage') ?>
                        </h4>
                        <div class="column">
                            <div class="ui fluid input field">
                                <select name="transport-type" class="ui dropdown">
                                    <option value=""><?php _e('Type of transport','sage'); ?></option>
                                    <option value="private"><?php _e('Private','sage'); ?></option>
                                    <option value="semi-private"><?php _e('Semi private','sage'); ?></option>
                                    <option value="public"><?php _e('Public','sage'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid input field" ng-hide="companion">
                                <select name="driver" id="driver" class="ui dropdown">
                                    <option value=""><?php _e('Driver','sage'); ?></option>
                                    <option value="self-drive"><?php _e('Self Drive','sage'); ?></option>
                                    <option value="driver"><?php _e('Driver','sage'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="column"></div>
                        <div class="column"></div>
                    </div>

                    <br><br>
                    <input type="hidden" name="action" value="requestQuote"/>
                    <input type="submit" class="ui button" value="<?php _e('Request a quote','sage'); ?>">
                </form>
                <br/><br/>
                <div id="feedback"></div>
                <br/><br/>

            </div>
        </div>
    </div>
</section>
