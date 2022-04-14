<?php

/*

type: layout

name: Blog 9

position: 9

categories: Blog

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
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="posts" template="skin-9" />
    </div>
</section>
