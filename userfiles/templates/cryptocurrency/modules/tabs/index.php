<?php if(function_exists('get_module_option')) {
    $settings = get_module_option('settings', $params['id']);
    $module_template = get_module_option('data-template', $params['id']);
} else {
    $settings = false;
    $module_template = false;
}

if ($module_template == false and isset($params['template'])) {
    $module_template = $params['template'];
}
if ($module_template != false) {
    $template_file = module_templates($config['module'], $module_template);
} else {
    $template_file = module_templates($config['module'], 'default');
}


$json = array();

if ($settings == false) {
    if (isset($params['settings'])) {
        $settings = $params['settings'];
        $json = json_decode($settings, true);

    } else {

        $json[] = array(
            'title' => 'Tab title',
            'id' => 'tab-' .  $params['id']. '-1',
            'icon' => '<i class="fa fa-home"></i>'
        );


    }
} else {
    $json = json_decode($settings, true);
}

if(!$json){
    $json[] = array(
        'title' => 'Info',
        'id' => 'tab-' .  $params['id']. '-1',
        'icon' => '<i class="fa fa-home"></i>'
    );
}

$data = array();
$count = 0;
foreach ($json as $slide) {
    $count++;
    if (!isset($slide['id'])) {
        $slide['id'] = 'tab-' .  $params['id']. '-'.$count;
    }
    array_push($data, $slide);
}


if (is_file($template_file)) {
    include($template_file);
}
