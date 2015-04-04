<section id="request" class="ui basic segment fullheight">
    <div class="segment-content">
        <div class="ui page grid">
            <div class="column">
                <h2 class="ui center aligned header uppercase segment-content"><?php _e('Request'); ?></h2>
                <form class="ui form">
                    <div class="ui three column grid">
                        <div class="eight wide column">
                            <div class="ui fluid input">
                                <input type="text" placeholder="<?php _e('Destination','sage'); ?>">
                            </div>
                        </div>
                        <div class="four wide column">
                            <div class="ui fluid input">
                                <input type="text" class="datepicker" name="departure" id="departure" placeholder="<?php _e('Departure date','sage'); ?>">
                            </div>
                        </div>
                        <div class="four wide column">
                            <div class="ui fluid input">
                                <input type="text" class="datepicker" name="return" id="return" placeholder="<?php _e('Return date','sage'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="ui two column grid">
                        <div class="column">
                            <div class="ui two column grid">
                                <div class="column">
                                    <div class="ui fluid input">
                                        <select class="ui dropdown">
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
                                    <div class="ui fluid input">
                                        <select class="ui dropdown">
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
                            <div class="ui two column grid">
                                <div class="column">
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Romance','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Family','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Friends','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Group','sage'); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Relaxation','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Discovery & Leisure','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Culture & History','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Business','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Adventure','sage'); ?></label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui checkbox">
                                            <input type="checkbox">
                                            <label><?php _e('Fun & Entertainment','sage'); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui fluid input">
                                <textarea placeholder="<?php _e('Preferenes','sage'); ?>" class="ui textarea wide"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="right aligned sixteen wide column">
                        <button type="submit" class="ui primary button"><?php _e('Send','sage'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
