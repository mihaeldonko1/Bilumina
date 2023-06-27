<?php

/*

type: layout

name: Content 21

position: 21

categories: Header

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-header-skin-21-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay="1" style="background-color: #ffffff;">

<div class="h-100 w-100 overflow-hidden position-absolute top-0 right-0">
    <div style="background-image: url(<?php print template_url(); ?>assets/img/crypto-header.jpg)" class="crypto-mask"/>
</div>
    <div class="mh-100vh d-flex align-items-center background-image-holer">
        <div class="container crypto-header d-flex align-items-center mh-100vh">
            <div class="row flex-lg-nowrap col-12 ms-0">
                <div class="col-12 col-xs-10 col-lg-6 pb-5 mb-4 pe-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start z-index-crypto-text">
                    <div class="allow-drop text-white">
                        <h1 class="header-h1-text"><span style="color: #100f43;">Invest in</span> <span style="color:#ffae00 ;">Crypto</span> <br> <span style="color: #100f43;">Currencies</span> </h1>
                        <br>
                        <p class="header-h1-paragraph">Use modern blockchain technologies and Bitcoin to earn money.</p>
                        <br/>
                        <br/>
                            <module type="btn" btn_text="Create Wallet"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
