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
    'type' => 'number',
    'field' => 'product_number_days',
    'scope' => 'post_meta',
    'label' => __('Number of Days'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => __('Enter the number of days')
    ),
    'validate' => array(
        array(
            'type' => 'number'
        )
    )
));
?>
