<?php

function create_attr_str($classes)
{
    if (empty($classes)) {
        return '';
    }
    $res = 'class=" ';
    foreach ($classes as $class) {
        $res .= $class .' ';
    }
    $res .= '" ';
    return $res;
}


function render_nav($menu_lang, $menu_cfg)
{
    $res = '';
    $k = 0;
    foreach ($menu_lang as $key => $menu_item) {
        $classes = [];
        if ($k === 0) {
            $classes[] = 'active';
        }
        $res .= '<a href="' . $menu_cfg[$key] . '" '.create_attr_str($classes).' title="' . $menu_lang[$key] . '">' . $menu_lang[$key] . '</a>';
        $k++;
    }
    return $res;
}
