<?php

/*

type: layout

name: Price Lists 7

position: 7

categories: Price Lists

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="price-lists-7 <?php print $layout_classes; ?> section edit safe-mode  " field="layout-price-lists-skin-7-<?php print $params['id'] ?>" rel="module" style="background-color: #f5f5f5;">
    <div class="container-fluid">
        <div class="container">
            <div class="row mx-auto justify-content-center">
                <div class="text-center">
                    <h1>Go Premium. Be Happy</h1>
                    <p>Check our service for free and switch to a paid plan to have access to all the extras and new things.</p>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-8 col-12 my-5 p-3 cloneable">
                    <div class="card h-100">
                        <div class="nodrop card-body my-3 mx-1">
                            <p class="card-title">Start Free</p>

                            <span class="h1">Free</span>
                            <br>
                        </div>
                        <div class="col">
                            <div class="element">
                                <ul class="mw-default-layout-un-ordered-checked">
                                    <li class="my-4">20 User Tasks</li>
                                    <li class="my-4">5 GB of Store</li>
                                    <li class="my-4">Theme Customization</li>
                                    <li class="my-4">Free Email Support</li>
                                    <li class="my-4">Security Suite</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <module type="btn" button_text="Get Started">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8 col-12 my-5 p-3 cloneable">
                    <div class="card h-100">
                        <div class="nodrop card-body my-3 mx-1">
                            <p class="card-title">Switch to Pro</p>

                            <span class="h3">$</span><span class="h1">2,39</span>/monthly
                            <br>
                        </div>
                        <div class="col">
                            <div class="element">
                                <ul class="mw-default-layout-un-ordered-checked">
                                    <li class="my-4">Unlimited Tasks</li>
                                    <li class="my-4">10 GB of Store</li>
                                    <li class="my-4">Theme Customization</li>
                                    <li class="my-4">Free Email Support</li>
                                    <li class="my-4">Security Suite</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <module type="btn" button_text="Go Pro">
                        </div>
                    </div>
                </div>


                <div class="col-md-8 text-center">
                    <p><span style="font-weight: bold;">Note!</span> Price may vary from location to location due to local taxation laws and other things.</p>
                </div>
            </div>
        </div>
    </div>
</section>

