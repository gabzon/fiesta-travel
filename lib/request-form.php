<?php

function requestQuote(){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if( wp_mail( 'gabriel@sevinci.com','el titulo', $name) === FALSE){
        echo "error";
    } else{
        echo "YEEEAH BABY";
    }
    die();

}

add_action('wp_ajax_requestQuote', 'requestQuote');
add_action('wp_ajax_nopriv_requestQuote', 'requestQuote');


// not really needed

//add_action( 'wp_ajax_nopriv_request-submit', __NAMESPACE__ . '\\request_submit');
///add_action( 'wp_ajax_request-submit', __NAMESPACE__ . '\\request_submit');

//do_action('request_submit');

// function request_submit(){
//
//
//     $headers = array('Content-Type: text/html; charset=UTF-8');
//
//     $data = $_POST;
//     $info = 'Destination: ' . $data['destination'] . '<br/>' .
//             'Departure Date: '.$data['departure'].'<br/>'.
//             'Return Date: ' .$data['return'].'<br/>' .
//             'Adults: ' .$data['adults'].'<br/>'.
//             'Kids: '. $data['kids'].'<br/>';
//
//     $info .= 'Type of travel: <br/><ul style="margin: 0; padding: 0;">';
//     foreach($data['travel'] as $travel){
//         $info .= '<li>'.ucwords($travel).'</li>';
//     }
//     $info.= '</ul>';
//
//     $info .= 'Preferences: '.$data['preferences'];
//     $admin_email = get_option( 'admin_email' );
//     //wp_mail( $admin_email, __('New Request', 'sage'), $info, $headers);
//     wp_mail( 'gabriel@listo.voyage','el titulo','Mi super mensaje', $headers);
//     exit;
// }

?>

<!-- <input name="fullname" type="text" placeholder="<?php _e('Full name','sage'); ?>" />
<input name="client-email" type="text" placeholder="<?php _e('Email','sage'); ?>" />
<input name="client-phone" type="text" placeholder="<?php _e('Phone','sage'); ?>" />
<input name="destination" id="destination" type="text" placeholder="<?php _e('Destination','sage'); ?>" />
<input name="departure" id="departure" type="text" class="datepicker" placeholder="<?php _e('Departure date','sage'); ?>">
<input name="return" id="return" type="text" class="datepicker" placeholder="<?php _e('Return date','sage'); ?>">
<select name="companion" id="companion" class="ui dropdown">
<option value=""><?php _e('Traveling with','sage'); ?></option>
<option value="alone"><?php _e('Alone','sage'); ?></option>
<option value="couple"><?php _e('In couple','sage'); ?></option>
<option value="family"><?php _e('Family','sage'); ?></option>
<option value="friends"><?php _e('Friends','sage'); ?></option>
<option value="group"><?php _e('Group','sage'); ?></option>
<option value="colleagues"><?php _e('Collegues','sage'); ?></option>
</select>

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
<textarea name="preferences" id="preferences" placeholder="<?php _e('Preferences','sage'); ?>" class="ui textarea wide"></textarea>
<input name="flights" type="checkbox" ng-model="flight"/> &nbsp;&nbsp;<i class="plane icon"></i><?php _e('Flights','sage'); ?>
<input name="hosting" type="checkbox" ng-model="hosting"/> &nbsp;&nbsp;<i class="building icon"></i><?php _e('Hosting','sage'); ?>
<input name="activities" type="checkbox" ng-model="activity"/> &nbsp;&nbsp;<i class="cocktail icon"></i><?php _e('Activities','sage'); ?>
<input name="transport" type="checkbox" ng-model="transport"/> &nbsp;&nbsp;<i class="car icon"></i><?php _e('Transport','sage'); ?>
<input name="economy" type="checkbox"/> &nbsp;&nbsp;<?php _e('Economy','sage'); ?>
<input name="business" type="checkbox"/> &nbsp;&nbsp;<?php _e('Business Class','sage'); ?>
<input name="first" type="checkbox"/> &nbsp;&nbsp;<?php _e('First Class','sage'); ?>
<input name="seat" type="radio" value="either"/> &nbsp;&nbsp;<?php _e('Either','sage'); ?>
<input name="seat" type="radio" value="aisle"/> &nbsp;&nbsp;<?php _e('Aisle','sage'); ?>
<input name="seat" type="radio" value="windows"/> &nbsp;&nbsp;<?php _e('Windows','sage'); ?>
<input name="vegeterian-meal" type="checkbox"/> &nbsp;&nbsp; <i class="leaf icon"></i> <?php _e('Vegeterian meal','sage'); ?>
<input name="special-assistance" type="checkbox"/> &nbsp;&nbsp;<i class="handicap icon"></i> <?php _e('Special assistance','sage'); ?>
<input name="internet" type="checkbox"/> &nbsp;&nbsp;<?php _e('Internet','sage'); ?>
<input name="breakfast" type="checkbox"/> &nbsp;&nbsp;<?php _e('Breakfast','sage'); ?>
<input name="parking" type="checkbox"/> &nbsp;&nbsp;<?php _e('Parking','sage'); ?>
<input name="swiming" type="checkbox"/> &nbsp;&nbsp;<?php _e('Swiming Pool','sage'); ?>
<input name="laundry" type="checkbox"/> &nbsp;&nbsp;<?php _e('Laundry Room','sage'); ?>
<input name="fitness" type="checkbox"/> &nbsp;&nbsp;<?php _e('Gym/Fitness','sage'); ?>
<input name="wellbeing" type="checkbox"/> &nbsp;&nbsp;<?php _e('Space Well-being','sage'); ?>
<input name="conference" type="checkbox"/> &nbsp;&nbsp;<?php _e('Conference room','sage'); ?>
<input name="hotel" type="checkbox" ng-model="hotel"/> &nbsp;&nbsp;<?php _e('Hotel','sage'); ?>
<input name="appartment" type="checkbox"/> &nbsp;&nbsp;<?php _e('House/Appartment','sage'); ?>
<input name="camping" type="checkbox"/> &nbsp;&nbsp;<?php _e('Homestay','sage'); ?>
<input name="homestay" type="checkbox"/> &nbsp;&nbsp;<?php _e('Camping','sage'); ?>
<input name="5-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
<input name="4-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
<input name="3-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
<input name="2-star" type="checkbox"/> &nbsp;&nbsp;<i class="star icon"></i><i class="star icon"></i>
<input name="travel[]" value="culture" type="checkbox">&nbsp;&nbsp;<?php _e('Culture & History','sage'); ?>
<input name="travel[]" value="business" type="checkbox">&nbsp;&nbsp;<?php _e('Business','sage'); ?>
<input name="travel[]" value="fun" type="checkbox">&nbsp;&nbsp;<?php _e('Fun & Entertainment','sage'); ?>
<input name="travel[]" value="romance" type="checkbox">&nbsp;&nbsp;<?php _e('Romance','sage'); ?>
<input name="travel[]" value="adventure" type="checkbox">&nbsp;&nbsp;<?php _e('Adventure','sage'); ?>
<input name="travel[]" value="fun" type="checkbox">&nbsp;&nbsp;<?php _e('Fun & Entertainment','sage'); ?>
<input name="travel[]" value="relaxation" type="checkbox">&nbsp;&nbsp;<?php _e('Relaxation','sage'); ?>
<input name="travel[]" value="discovery" type="checkbox">&nbsp;&nbsp;<?php _e('Discovery & Leisure','sage'); ?>
<input type="hidden" name="action" id="action" value="request-submit"/>
<button type="submit" id="request-submit" class="ui primary button"><?php _e('Request a quote','sage'); ?></button>
-->
