<?php

/*

type: layout

name: Background 12

position: 12

categories: animation-bg

*/

?>



<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="animation-backgrounds-12">
    <section class="section bg-animation py-0 edit safe-mode nodrop  position-relative h-100vh" field="layout-animation-bg-skin-12-<?php print $params['id'] ?>" rel="module" style="background-color: unset;">

        <div class="background-image-holder mh-100vh d-flex align-items-center">
            <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
                <div class="row">
                    <div class="col-12 col-lg-10 col-lg-10 mx-auto text-white allow-drop">
                        <h1 class="header-section-title mb-7" >Describe your company </h1>
                        <p class="header-section-p lead" >Describe your company and services with few words and explain why you are the best choice.</p>
                        <br><br>
                        <module type="btn" button_style="btn-link" text="See more"/>

                    </div>
                </div>
            </div>
        </div>

        <div class="background">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>



    </section>
</div>
