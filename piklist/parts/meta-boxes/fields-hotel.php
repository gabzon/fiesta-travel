<?php
/*
Title: Hotel
Post Type: hotel
Collapse: false
Meta box: true
*/

piklist('field', array(
    'type' => 'select',
    'field' => 'hotel_stars',
    'scope' => 'post_meta',
    'label' => __('Stars'),
    'value' => '3',
    'choices' => array(
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5'
    )
));

piklist('field', array(
    'type' => 'group',
    'field' => 'hotel_address_group',
    'scope' => 'post_meta',
    'label' => __('Address'),
    'list' => false,
    'fields' => array(
        array(
            'type' => 'text',
            'field' => 'hotel_address',
            'label' => __('Address'),
            'columns' => 4,
            'attributes' => array(
                'placeholder' => __('Address')
            )
        ),
        array(
            'type' => 'text',
            'field' => 'hotel_postal_code',
            'label' => __('Postal Code'),
            'columns' => 4,
            'attributes' => array(
                'placeholder' => __('Postal Code')
            )
        ),
        array(
            'type' => 'text',
            'field' => 'hotel_city',
            'label' => __('City'),
            'columns' => 4,
            'attributes' => array(
                'placeholder' => __('City')
            )
        )
    )
));

piklist('field', array(
    'type' => 'number',
    'field' => 'hotel_number_rooms',
    'scope' => 'post_meta',
    'label' => __('Number of Rooms'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the number of rooms')
    ),
    'validate' => array(
        array(
            'type' => 'number'
        )
    )
));

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'hotel_services',
    'scope' => 'post_meta',
    'label' => __('Services'),
    'list' => false,
    'choices' => array(
        'parking' => __('Parking'),
        'internet' => __('Internet'),
        'pool' => __('Swiming Pool'),
        'tv' => __('TV')
    )
));

?>