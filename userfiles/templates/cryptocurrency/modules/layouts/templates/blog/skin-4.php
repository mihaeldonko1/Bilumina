<?php

/*

type: layout

name: Blog 4

position: 4

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="posts" template="skin-4" slides-md="2" slides-lg="3" slides-lg="3" adaptive_height="false" />
    </div>
</section>
