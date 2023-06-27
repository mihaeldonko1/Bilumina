<?php

/*

type: layout

name: Background 10

position: 10

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

<div class="animation-backgrounds-10">
    <section class="section bg-animation py-0 edit safe-mode nodrop  position-relative h-100vh" field="layout-animation-bg-skin-10-<?php print $params['id'] ?>" rel="module" style="background-color: unset;">


        <article class="wrapper">
            <div class="background-image-holder mh-100vh d-flex align-items-center">
                <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-lg-10 mx-auto text-white allow-drop">
                            <h1 class="header-section-title mb-7" style="color: #ffffff;">Describe your company </h1>
                            <p class="header-section-p lead" style="color: #ffffff;">Describe your company and services with few words and explain why you are the best choice.</p>
                            <br><br>
                            <module type="btn" button_style="btn-primary" text="See more"/>

                        </div>
                    </div>
                </div>
            </div>
        </article>

    </section>
</div>
