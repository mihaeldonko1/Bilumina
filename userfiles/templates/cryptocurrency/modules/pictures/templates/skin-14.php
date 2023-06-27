<?php

/*

type: layout

name: skin 14

description: Skin 14

*/

?>

<?php

$pictureElementId = 'module-image-' . $params['id'];

if (is_array($data)): ?>
   <div class="new-skin-shop">


        <div class="shop-inner-gallery d-block">

            <div class="shop-inner-big-image position-relative">
                <?php $price = app()->shop_manager->get_product_prices(content_id(), true);

                if (isset($price[0]) and isset($price[0]['original_value'])): ?>

                    <?php
                    $oldFigure = floatval($price[0]['custom_value']);
                    $newFigure = floatval($price[0]['original_value']);
                    $percentChange = 0;

                    ?>

                    <?php if ($oldFigure < $newFigure): ?>
                        <?php
                        $percentChange = (1 - $oldFigure / $newFigure) * 100;
                        ?>
                    <?php endif; ?>

                    <?php if ($percentChange > 0): ?>
                        <div class="discount-label">
                            <span class="discount-percentage">
                                    <?php echo number_format($percentChange, 2); ?>%
                            </span>
                            <span class="discount-label-text"><?php _lang("Discount"); ?></span>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <img src="<?php print thumbnail($data[0]['filename'], 1080, 1080); ?>" id="<?php print $pictureElementId; ?>" />
            </div>

            <?php if (sizeof($data) > 1) { ?>
                <div class="shop-inner-gallery-thumbnails mt-4 flex-direction-row">
                    <?php $count = -1; foreach ($data as $item): $count++; ?>
                        <a class="mx-0"
                           href="<?php print thumbnail($item['filename'], 1080, 1080); ?>"
                           onclick="setProductImage('<?php print $pictureElementId; ?>', '<?php print thumbnail($item['filename'], 1920, 1920); ?>', <?php print $count; ?>);return false;"
                           style="background-image: url('<?php print thumbnail ($item['filename'], 800, 800); ?>');">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php } ?>
        </div>
   </div>


    <script>

        var setProductImage = function (id, url, index) {
            var el = document.getElementById(id);
            el.dataset.index = index;
            var parent = el.parentElement;
            mw.spinner(({element: parent, size: 60, decorate: true})).show();
            mw.element({
                tag: 'img',
                props: {
                    src: url,
                    onload: function (){
                        el.src = url;
                        mw.spinner(({element: parent})).hide();
                    }
                }
            })
        }

        var gallery = <?php print json_encode($data); ?>;

        document.getElementById('<?php print $pictureElementId; ?>').addEventListener('click', function(){
            mw.gallery(gallery, Number(this.dataset.index || 0));
        });
    </script>

<?php endif; ?>
