<?php
/*
Title: Product
Post Type: product
Collapse: false
Meta box: true
*/

piklist('field', array(
    'type' => 'text',
    'field' => 'product_price',
    'scope' => 'post_meta',
    'label' => __('Price'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the price')
    )
));

piklist('field', array(
    'type' => 'group',
    'field' => 'product_date_price',
    'scope' => 'post_meta',
    'label' => __('Price for date'),
    'add_more' => true,
    'fields' => array(
        array(
            'type' => 'datepicker',
            'field' => 'product_date',
            'label' => __('Date'),
            'columns' => 6,
            'options' => array(
                'dateFormat' => 'M d, yy'
            ),
            'value' => date('M d, Y', time() + 604800)
        ),
        array(
            'type' => 'text',
            'field' => 'product_price',
            'label' => __('Price'),
            'description' => __('Description Price'),
            'columns' => 6,
            'attributes' => array(
                'class' => 'regular-text',
                'placeholder' => __('Enter the price')
            )
        )
    )
));

piklist('field', array(
    'type' => 'file',
    'field' => 'product_gallery',
    'scope' => 'post_meta',
    'label' => __('Photo Gallery'),
    'options' => array(
        'modal_title' => __('Add Picture(s)'),
        'button' => __('Add Pictures')
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_included',
    'scope' => 'post_meta',
    'label' => __('Included'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_not_included',
    'scope' => 'post_meta',
    'label' => __('Not Included'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_cancelation',
    'scope' => 'post_meta',
    'label' => __('Cancelation'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_payment',
    'scope' => 'post_meta',
    'label' => __('Payment Method'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_aditional_info',
    'scope' => 'post_meta',
    'label' => __('Aditional Information'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_flights',
    'scope' => 'post_meta',
    'label' => __('Flights'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'product_hosting',
    'scope' => 'post_meta',
    'label' => __('Hosting'),
    'attributes' => array(
        'rows' => 10,
        'cols' => 50,
        'class' => 'large-text code'
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'product_slogan',
    'scope' => 'post_meta',
    'label' => __('Slogan'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the slogan')
    )
));

piklist('field', array(
    'type' => 'group',
    'field' => 'product_number_days',
    'scope' => 'post_meta',
    'label' => __('Number of Days'),
    'list' => false,
    'fields' => array(
        array(
            'type' => 'text',
            'field' => 'product_days',
            'columns' => 4,
            'attributes' => array(
                'placeholder' => __('Days')
            ),
            'validate' => array(
                array(
                    'type' => 'number'
                )
            )
        ),
        array(
            'type' => 'text',
            'field' => 'product_nights',
            'columns' => 4,
            'attributes' => array(
                'placeholder' => __('Nights')
            ),
            'validate' => array(
                array(
                    'type' => 'number'
                )
            )
        )
    )
));

?>
