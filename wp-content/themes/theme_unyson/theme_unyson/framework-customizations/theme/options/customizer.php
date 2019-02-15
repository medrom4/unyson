<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Цвет фона сайта', '{domain}'),
        'value' => '#ADFF2F',
    ),
    
    'about-text' => array(
        'type'  => 'textarea',
        'value' => 'Значение',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Текст о компании', '{domain}'),
        'desc'  => __('Напишите сюда текст', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    
    'html-add' => array(
    'type'  => 'html',
    'value' => 'default hidden value',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Вставить html код', '{domain}'),
    'desc'  => __('Description', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
    'html'  => 'My <b>custom</b> <em>HTML</em>',
),
);