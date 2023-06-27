<?php

/*

type: layout

name: Misc 3

position: 3

categories: Misc

*/

?>


<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';

if (page_title()) {
    $title = page_title();
}
?>

<section class="section <?php print $layout_classes; ?>safe-mode allow-drop edit" field="layout-misc-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
                <div class="col-12">
                    <h5 class="font-weight-bold text-center  "><?php _lang("The amazing hubble","templates/big"); ?></h5>
                    <h1 class="text-center"><?php _lang("To appreciate what is really exciting about radio astronomy, first we have to shift how we view astronomy","templates/big"); ?>.</h1>

                    <div class="col-8 mx-auto mt-10">
                        <module type="accordion" template="skin-2"/>
                    </div>
                </div>
        </div>
    </div>
</section>
