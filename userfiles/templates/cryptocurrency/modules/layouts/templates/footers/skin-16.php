<?php

/*

type: layout

name: Footers 16

position: 16

categories: Footers

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

<section class="  footer-background <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-16-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row justify-content-center text-md-start text-center">
            <div class="col-12 col ">
                <div class="col-8 mx-auto pb-4">
                    <module type="contact_form" template="subscribe-7"/>
                </div>
            </div>

            <div class="col-md-3 col-12 text-center text-md-start pb-4">
                <div class="pb-4">
                    <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                </div>
            </div>
            <div class="col-sm-6 row d-flex">
                <div class="col-md-4 col">
                    <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?> </p>
                    <module type="menu" template="simple" name="footer_menu_1"/>
                </div>

                <div class="col-md-4 col">
                    <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_2"/>
                </div>

                <div class="col-md-4 col">
                    <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_3"/>
                </div>
            </div>

            <div class="col-md-3 text-md-end text-center">
                    <module type="social_links"/>
            </div>
        </div>
    </div>

</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-16-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>