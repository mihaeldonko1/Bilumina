<?php

/*

type: layout

name: Menu skin 6

description: Navigation bar skin 6

*/

?>


<?php
$menu_filter['ul_class'] = '';
$menu_filter['ul_class_deep'] = '';
$menu_filter['li_class'] = '';
$menu_filter['a_class'] = 'link';


//
$menu_filter['li_submenu_class'] = '';
$menu_filter['li_submenu_a_class'] = '';
//
$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link nav-link {active_class} {exteded_classes} {nest_level} {a_class}" {target_attribute} href="{url}">{title}</a>';
$menu_filter['li_submenu_a_link'] = '<a itemprop="url" data-item-id="{id}" href="{url}"  class="menu_element_link nav_link {active_class} {exteded_classes} {nest_level} {li_submenu_a_class} ps-2" >{title} <i class="fa fa-angle-down px-1"></i></a>';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>

