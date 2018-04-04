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
    'top_slider_top' => array(
        'type' => 'addable-popup',
        'label' => __('Big image', '{domain}'),
        'desc' => __('adding image', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title of photo', '{domain}'),
                'desc' => __('add title', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'top_slider_for' => array(
        'type' => 'addable-popup',
        'label' => __('Small images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- photo }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
        ),
    ),
    'about_title' => array(
        'type' => 'text',
        'label' => __('title of "O nás" section', '{domain}'),
        'desc' => __('add title', '{domain}'),
        'value' => 'O nás',
    ),
    'about_textbox' => array(
        'type' => 'addable-popup',
        'label' => __('Add text to "O nás" section', '{domain}'),
        'desc' => __('add text', '{domain}'),
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
                'desc' => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_left' => array(
        'type' => 'addable-popup',
        'label' => __('Add text to left side of "O nás" section', '{domain}'),
        'desc' => __('add text', '{domain}'),
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
                'desc' => __('add title', '{domain}'),
                'value' => '',
            ),
            'textblock' => array(
                'type' => 'textarea',
                'label' => __('text', '{domain}'),
                'desc' => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_right' => array(
        'type' => 'addable-popup',
        'label' => __('Add text to right side of "O nás" section', '{domain}'),
        'desc' => __('add text', '{domain}'),
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
                'desc' => __('add title', '{domain}'),
                'value' => '',
            ),
            'textblock' => array(
                'type' => 'textarea',
                'label' => __('text', '{domain}'),
                'desc' => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_slider_top' => array(
        'type' => 'addable-popup',
        'label' => __('About slider BIG images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title of photo', '{domain}'),
                'desc' => __('add title', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'about_slider_for' => array(
        'type' => 'addable-popup',
        'label' => __('About slider SMALL images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- photo }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
        ),
    ),
    'team_title' => array(
        'type' => 'text',
        'label' => __('title of "Náš tým" section', '{domain}'),
        'desc' => __('add title', '{domain}'),
        'value' => 'Náš tým',
    ),
    'team_member_photo1' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr1' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo2' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr2' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo3' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr3' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo4' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr4' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo5' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr5' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo6' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr6' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo7' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr7' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo8' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr8' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo9' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr9' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo10' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr10' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_member_photo11' => array(
        'type' => 'upload',
        'label' => __('Photo', '{domain}'),
        'desc' => __('Add photo', '{domain}'),
        'images_only' => true,
    ),
    'team_member_descr11' => array(
        'type' => 'addable-popup',
        'label' => __('Name, phonenumber & email of teammember', '{domain}'),
        'desc' => __('adding description', '{domain}'),
        'template' => '{{- name }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => __('Name', '{domain}'),
                'desc' => __('add name', '{domain}'),
                'value' => '',
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('email', '{domain}'),
                'desc' => __('add email', '{domain}'),
                'value' => '',
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('phone', '{domain}'),
                'desc' => __('add phone', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_slider_top' => array(
        'type' => 'addable-popup',
        'label' => __('Team slider BIG images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title of photo', '{domain}'),
                'desc' => __('add title', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'team_slider_for' => array(
        'type' => 'addable-popup',
        'label' => __('Team slider SMALL images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- photo }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
        ),
    ),
    'attent_title' => array(
        'type' => 'text',
        'label' => __('title of "Naše zaměření" section', '{domain}'),
        'desc' => __('add title', '{domain}'),
        'value' => 'Naše zaměření',
    ),
    'attent_element' => array(
        'type' => 'addable-popup',
        'label' => __('"Naše zaměření" section element', '{domain}'),
        'desc' => __('adding elements', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 20, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title', '{domain}'),
                'desc' => __('Add title', '{domain}'),
            ),
            'textbox' => array(
                'type' => 'addable-popup',
                'label' => __('Add text block', '{domain}'),
                'desc' => __('adding images', '{domain}'),
                'template' => '{{- text }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 3, // limit the number of popup`s that can be added
                'add-button-text' => __('Add', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'text' => array(
                        'type' => 'textarea',
                        'label' => __('title', '{domain}'),
                        'desc' => __('Add text block', '{domain}'),
                        'images_only' => true,
                    ),
                ),
            ),
        ),
    ),
    'media_title' => array(
        'type' => 'text',
        'label' => __('title of "Média o nás" section', '{domain}'),
        'desc' => __('add title', '{domain}'),
        'value' => 'Média o nás',
    ),
    'media_slider' => array(
        'type' => 'addable-popup',
        'label' => __('"Média o nás" section slider', '{domain}'),
        'desc' => __('adding elements', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('title', '{domain}'),
                'desc' => __('Add title', '{domain}'),
                'images_only' => true,
            ),
            'text' => array(
                'type' => 'textarea',
                'label' => __('textblock', '{domain}'),
                'desc' => __('Add text', '{domain}'),
            ),
        ),
    ),
    'media_slider_top' => array(
        'type' => 'addable-popup',
        'label' => __('Media slider BIG images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('title of photo', '{domain}'),
                'desc' => __('add title', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'media_slider_for' => array(
        'type' => 'addable-popup',
        'label' => __('Media slider SMALL images', '{domain}'),
        'desc' => __('adding images', '{domain}'),
        'template' => '{{- photo }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 1, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc' => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
        ),
    ),
    'contacts_title' => array(
        'type' => 'text',
        'label' => __('title of "Kontaktujte nás" section', '{domain}'),
        'desc' => __('add title', '{domain}'),
        'value' => 'Kontaktujte nás',
    ),
];