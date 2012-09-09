<?php

register_nav_menu('primary', 'Main navigation menu');

function no_wp_nav_menu() {
    if ($user_ID) {
        echo 'Primary menu not yet configured. <a href="' . home_url('/') . 'wp-admin/nav-menus.php">Configure</a>';
    }
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    return (in_array("current-menu-item", $classes)) ? array('active') : array('');
}