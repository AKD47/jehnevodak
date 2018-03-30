<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'top_slider' => array(
        'type' => 'addable-popup',
        'label' => __('Top slider images', '{domain}'),
        'desc'  => __('adding images', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 4, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc'  => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title of photo', '{domain}'),
                'desc'  => __('add title', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_title' => array(
        'type' => 'text',
        'label' => __('title of "O nás" section', '{domain}'),
        'desc'  => __('add title', '{domain}'),
        'value' => 'O nás',
    ),
    'about_textbox' => array(
        'type' => 'addable-popup',
        'label' => __('Add text to "O nás" section', '{domain}'),
        'desc'  => __('add text', '{domain}'),
        'template' => '{{- textblock }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 4, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'textblock' => array(
                'type' => 'textarea',
                'label' => __('text', '{domain}'),
                'desc'  => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_left' => array(
        'type' => 'addable-popup',
        'label' => __('Add text to left side of "O nás" section', '{domain}'),
        'desc'  => __('add text', '{domain}'),
        'template' => '{{- textblock }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 3, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('title', '{domain}'),
                'desc'  => __('add title', '{domain}'),
                'value' => '',
            ),
            'textblock' => array(
                'type' => 'textarea',
                'label' => __('text', '{domain}'),
                'desc'  => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_right' => array(
        'type' => 'addable-popup',
        'label' => __('Add text to right side of "O nás" section', '{domain}'),
        'desc'  => __('add text', '{domain}'),
        'template' => '{{- textblock }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 3, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('title', '{domain}'),
                'desc'  => __('add title', '{domain}'),
                'value' => '',
            ),
            'textblock' => array(
                'type' => 'textarea',
                'label' => __('text', '{domain}'),
                'desc'  => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_slider' => array(
        'type' => 'addable-popup',
        'label' => __('About slider images', '{domain}'),
        'desc'  => __('adding images', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 4, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc'  => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title of photo', '{domain}'),
                'desc'  => __('add title', '{domain}'),
                'value' => '',
            ),
        ),
    ),
];