<?php

/*

type: layout

name: Footers 8

position: 8

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
         field="layout-footer-skin-8-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 pb-sm-5">
                <div class="pb-7">
                    <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                </div>
                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <div class="row col-md-9 col">
                <div class="col-md-2 col pe-0 ms-5">
                    <p class="font-weight-bold ms-3 lead mb-0"><?php _lang('Category', 'templates/big'); ?> </p>
                    <module type="menu" template="simple" class="pb-lg-4" name="footer_menu_1"/>
                </div>

                <div class="col-md-2 col pe-0 ms-5">
                    <p class="font-weight-bold ms-3 lead mb-0"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_2"/>
                </div>

                <div class="col-md-2 col pe-0 ms-5">
                    <p class="font-weight-bold ms-3 lead mb-0"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_3"/>
                </div>

                <div class="col-md-2 col pe-0 ms-5">
                    <p class="font-weight-bold ms-3 lead mb-0"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_4"/>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-8-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
