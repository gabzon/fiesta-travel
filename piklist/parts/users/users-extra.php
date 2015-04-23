<?php
/*
Title: Social Networks
*/
// Let's create a text box field
piklist('field', array(
    'type' => 'text',
    'field' => 'user_facebook',
    'label' => __('Facebook'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )

));

piklist('field', array(
    'type' => 'text',
    'field' => 'user_twitter',
    'label' => __('Twitter'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'user_gplus',
    'label' => __('Google+'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'user_linkedin',
    'label' => __('LinkedIn'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'user_instagram',
    'label' => __('Instagram'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'user_pinterest',
    'label' => __('Pinterest'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'user_skype',
    'label' => __('Skype'),
    'columns' => 6,
    'attributes' => array(
        'class' => 'text'
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'user_languages',
    'label' => __('Languages Spoken'),
    'list' => false,
    'choices' => array(
        'english' => __('English'),
        'spanish' => __('Spanish'),
        'french' => __('French'),
        'italian' => __('Italian')
    )
));


piklist('field', array(
    'type' => 'file',
    'field' => 'user_picture',
    'label' => __('Picture','sage')
));

?>
