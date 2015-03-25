<?php
/*
 Title: Agency Information
 Setting: agency_settings
 */

piklist('field', array(
    'type' => 'file',
    'field' => 'agency_logo',
    'scope' => 'post_meta',
    'label' => __('Logo'),
    'options' => array(
        'modal_title' => __('Add Logo'),
        'button' => __('Add Logo')
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'angency_description',
    'scope' => 'post_meta',
    'label' => __('Agency Description'),
    'attributes' => array(
        'rows' => 5,
        'cols' => 50,
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency description')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_address',
    'scope' => 'post_meta',
    'label' => __('Address'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency address')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_postal_code',
    'scope' => 'post_meta',
    'label' => __('Postal Code'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency postal code')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_city',
    'scope' => 'post_meta',
    'label' => __('City'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency city')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_country',
    'scope' => 'post_meta',
    'label' => __('Country'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency country')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_email',
    'scope' => 'post_meta',
    'label' => __('Email'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency email')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_phone',
    'scope' => 'post_meta',
    'label' => __('Phone'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency phone')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'agency_fax',
    'scope' => 'post_meta',
    'label' => __('Fax'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency fax')
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'agency_schedule',
    'scope' => 'post_meta',
    'label' => __('Schedule'),
    'attributes' => array(
        'rows' => 5,
        'cols' => 50,
        'class' => 'regular-text',
        'placeholder' => __('Enter the agency schedule')
    )
));

piklist('field', array(
    'type' => 'radio'
    ,'field' => 'agency_insurance',
    'value' => 'yes',
    'label' => 'Travel Agency Insurance',
    'attributes' => array(
        'class' => 'text'
    ),'choices' => array(
        'yes' => __('Yes'),
        'no' => __('No')
    )
));