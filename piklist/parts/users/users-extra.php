<?php
/*
Title: Social Networks
*/
// Let's create a text box field
piklist('field', array(
    'type' => 'text',
    'scope' => 'post_meta',
    'field' => 'user_facebook',
    'label' => __('Facebook'),
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
    'scope' => 'post_meta',
    'field' => 'user_twitter',
    'label' => __('Twitter'),
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
    'scope' => 'post_meta',
    'field' => 'user_gplus',
    'label' => __('Google+'),
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
    'scope' => 'post_meta',
    'field' => 'user_linkedin',
    'label' => __('LinkedIn'),
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
    'scope' => 'post_meta',
    'field' => 'user_instagram',
    'label' => __('Instagram'),
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
    'scope' => 'post_meta',
    'field' => 'user_pinterest',
    'label' => __('Pinterest'),
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
    'scope' => 'post_meta',
    'field' => 'user_skype',
    'label' => __('Skype'),
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

?>