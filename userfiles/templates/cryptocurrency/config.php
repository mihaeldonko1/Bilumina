<?php

$config = array();
$config['name'] = "Crypto Currency";
$config['author'] = "Microweber CMS";
$config['version'] = "6.1";
$config['url'] = "http://microweber.com";


$config['standalone_module_skins'] = true;
$config['group_layouts_by_category'] = true;
$config['group_elements_by_category'] = true;



$config['is_default'] = 1; //if you set this parameter the template will be selected on the install screen

//Stylesheet Settings / accept type="color" and type="text" and type="title" and type="delimiter"
$config['stylesheet_compiler']['source_file'] = 'assets/css/colors.scss';
$config['stylesheet_compiler']['css_file'] = 'assets/css/colors.css';

$config['framework'] = "bootstrap5";



$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Background colors');
$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');
$config['stylesheet_compiler']['settings']['body-bg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Base background');
$config['stylesheet_compiler']['settings']['section'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Layout background');
$config['stylesheet_compiler']['settings']['primary'] = array('type' => 'color', 'default' => '#f2a900', 'label' => 'Primary color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Texts colors');
$config['stylesheet_compiler']['settings']['textDark'] = array('type' => 'color', 'default' => '#212121', 'label' => 'Headings');
$config['stylesheet_compiler']['settings']['textLight'] = array('type' => 'color', 'default' => '#f4f4f4', 'label' => 'Texts');
$config['stylesheet_compiler']['settings']['btnText'] = array('type' => 'color', 'default' => '#f4f4f4', 'label' => 'Button text');
$config['stylesheet_compiler']['settings']['links'] = array('type' => 'color', 'default' => '#000000', 'label' => 'Links color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Menus');
$config['stylesheet_compiler']['settings']['headerBg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Header background');
$config['stylesheet_compiler']['settings']['footerBg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Footer background');
$config['stylesheet_compiler']['settings']['menuColor'] = array('type' => 'color', 'default' => '#000000', 'label' => 'Menu color');


$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');
$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Font Settings');

$config['stylesheet_compiler']['settings']['fontFamily'] = array('type' => 'font_selector', 'default' => 'lato', 'label' => 'Choose font for your site');
$config['stylesheet_compiler']['settings']['fontFamily']['options'] = array('milliard' => 'Milliard');

$config['stylesheet_compiler']['settings']['bodyFontSize'] = array('type' => 'text', 'default' => '18px', 'label' => 'Body Font Size');


$config['template_settings'][] = array('type' => 'delimiter');

//Stylesheet Settings / accept type="dropdown" and type="text" and type="title" and type="delimiter"
//Header settings
$config['template_settings'][] = array('type' => 'title', 'label' => 'Header Options');

//$config['template_settings']['header_style'] = array('type' => 'dropdown_image', 'default' => 'header_style_2', 'label' => 'Navigation Style');
//$config['template_settings']['header_style']['options'] = array(
//    'header_style_1' => '<-Menu, Logo, Options->',
//    'header_style_2' => '<-Logo & Menu, Options->',
//    'header_style_3' => '<-Logo, Menu, Options->',
//    'header_style_4' => '<-Logo, Menu & Options->'
//);

//$config['template_settings']['sticky_navigation'] = array('type' => 'dropdown', 'default' => 'sticky-nav', 'label' => 'Sticky Navigation');
//$config['template_settings']['sticky_navigation']['options'] = array('sticky-nav' => 'Yes', '' => 'No' );
//
//$config['template_settings']['profile_link'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Profile link', 'help' => 'You can hide the profile button from your website header');
//$config['template_settings']['profile_link']['options'] = array('true' => 'Yes', 'false' => 'No');
//
//$config['template_settings']['phone_text'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Phone Text', 'help' => 'You can hide the phone text from your website header');
//$config['template_settings']['phone_text']['options'] = array('true' => 'Yes', 'false' => 'No');
//
//$config['template_settings']['contact_us_link'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Contact us link', 'help' => 'You can hide the contact us link from your website header');
//$config['template_settings']['contact_us_link']['options'] = array('true' => 'Yes', 'false' => 'No');
//
//$config['template_settings']['header_socials'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Socials', 'help' => 'You can hide the socials from your website header');
//$config['template_settings']['header_socials']['options'] = array('true' => 'Yes', 'false' => 'No');
//
//$config['template_settings']['search_bar'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Search bar', 'help' => 'You can hide the search bar button from your website header');
//$config['template_settings']['search_bar']['options'] = array('true' => 'Yes', 'false' => 'No');
//
$config['template_settings']['shopping_cart'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Shopping cart', 'help' => 'You can hide the shopping cart button from your website header');
$config['template_settings']['shopping_cart']['options'] = array('true' => 'Yes', 'false' => 'No');
//
//$config['template_settings']['header_posts'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Posts button');
//$config['template_settings']['header_posts']['options'] = array('true' => 'Yes', 'false' => 'No');

//$config['template_settings'][] = array('type' => 'delimiter');

$config['template_settings'][] = array('type' => 'title', 'label' => 'Shop Options');

$config['template_settings']['shop_sidebar'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show sidebar in shop');
$config['template_settings']['shop_sidebar']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings'][] = array('type' => 'delimiter');

$config['template_settings'][] = array('type' => 'title', 'label' => 'Footer Options');

$config['template_settings']['footer'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on Footer for the website', 'help' => 'You can hide the footer from your website');
$config['template_settings']['footer']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings'][] = array('type' => 'delimiter');

$config['template_settings'][] = array('type' => 'title', 'label' => 'Other Options');

$config['template_settings']['preloader'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Turn on preloader');
$config['template_settings']['preloader']['options'] = array('true' => 'Yes', 'false' => 'No');

//Layouts Padding Top & Bottom classes definiton
$config['layouts_css_classes'] = [];

$config['layouts_css_classes']['padding-top']['none'] = 'pt-0';
$config['layouts_css_classes']['padding-top'][1] = 'pt-1';
$config['layouts_css_classes']['padding-top'][2] = 'pt-2';
$config['layouts_css_classes']['padding-top'][3] = 'pt-3';
$config['layouts_css_classes']['padding-top'][4] = 'pt-4';
$config['layouts_css_classes']['padding-top'][5] = 'pt-5';

$config['layouts_css_classes']['padding-bottom']['none'] = 'pb-0';
$config['layouts_css_classes']['padding-bottom'][1] = 'pb-1';
$config['layouts_css_classes']['padding-bottom'][2] = 'pb-2';
$config['layouts_css_classes']['padding-bottom'][3] = 'pb-3';
$config['layouts_css_classes']['padding-bottom'][4] = 'pb-4';
$config['layouts_css_classes']['padding-bottom'][5] = 'pb-5';


$config['data-fields-product'] = array();

$config['data-fields-product'][] = array(
    'title' => 'Label type',
    'name' => 'label-type',
    'type' => 'select',
    'options'=>[
        'no-label'  => 'Do not show label',
        'text' => 'Text',
        'percent'  => 'Percent'
    ],
    'help' => 'Choose the product label or discount percentage from the select field below'
);


$config['data-fields-product'][] = array(
    'title' => 'Label',
    'name' => 'label',
    'type' => 'text',
    'help' => 'Write the text for your product label which will be displayed on the top-left of your product.'
);
$config['data-fields-product'][] = array(
    'title' => 'Label Color',
    'name' => 'label-color',
    'type' => 'color',
    'help' => 'Choose the color for your product label which will be displayed on the top-left of your product.'
);

