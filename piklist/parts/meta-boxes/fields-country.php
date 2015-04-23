<?php
/*
Title: Country
Post Type: country
Collapse: false
Meta box: true
*/

piklist('field', array(
    'type' => 'text',
    'field' => 'country_capital',
    'scope' => 'post_meta',
    'label' => __('Capital'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the capital')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'country_population',
    'scope' => 'post_meta',
    'label' => __('Population'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the population')
    ),
    'validate' => array(
        array(
            'type' => 'number'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'country_surface',
    'scope' => 'post_meta',
    'label' => __('Surface'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the surface')
    ),
    'validate' => array(
        array(
            'type' => 'number'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'country_religion',
    'scope' => 'post_meta',
    'label' => __('Religion'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the religion')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'country_currency',
    'scope' => 'post_meta',
    'label' => __('Currency'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the currency')
    )
));

piklist('field', array(
    'type' => 'file',
    'field' => 'country_gallery',
    'scope' => 'post_meta',
    'label' => __('Photo Gallery'),
    'options' => array(
        'modal_title' => __('Add Photo(s)'),
        'button' => __('Add Photos')
    )
));

piklist('field', array(
    'type' => 'file',
    'field' => 'country_flag',
    'scope' => 'post_meta',
    'label' => __('Flag'),
    'options' => array(
        'basic' => true
    )
));

?>
