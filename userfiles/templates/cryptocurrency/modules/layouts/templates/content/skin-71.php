<?php

/*

type: layout

name: Content 71

position: 71

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-9 d-flex <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center allow-drop">
        <module type="accordion" template="misc-12"/>
    </div>
</section>
