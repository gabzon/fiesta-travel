<?php 
/*
Title: Media info
Capability: manage_options
Locked: true
Collapse: true
*/


piklist('field', array(
    'type' => 'text',
    'field' => 'media_author',
    'label' => __('Author','sage'),
    'columns' => 12,
));

piklist('field', array(
    'type' => 'text',
    'field' => 'media_author_url',
    'label' => __('Author Profile','sage'),
    'columns' => 12
));

piklist('field', array(
    'type' => 'text',
    'field' => 'media_website_source',
    'label' => __('Source URL','sage'),
    'columns' => 12
));

piklist('field', array(
    'type' => 'text',
    'field' => 'media_license',
    'label' => __('License','sage'),
    'columns' => 12
));

piklist('field', array(
    'type' => 'text',
    'field' => 'media_position',
    'label' => __('Position','sage'),
    'description' => __('Position GPS (latitude,longitude)'),
    'columns' => 12
));

?>


