<?php

/*

type: layout

name: Skin-4

description: Skin-4

*/

?>

<script>mw.lib.require('slick');</script>
<script>
    /* ###################### Slick   ###################### */
    $(document).ready(function () {
        if ($('<?php print '#' . $params['id']; ?> .slick-gallery').length > 0) {
            $('<?php print '#' . $params['id']; ?> .slick-gallery').each(function () {
                var el = $(this);
                el.slick({
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1,
                    arrows: true,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    dots: false
                });
            });
        }
    });

</script>

<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>

    <div class="slick-arrows-1">
        <div class="slick-gallery">
            <?php foreach ($data as $item): ?>
                <?php
                if (isset($item['image_options']) and is_array($item['image_options'])) {
                    if (isset($item['image_options']['title'])) {
                        $itemTitle = $item['image_options']['title'];
                    } else {
                        $itemTitle = false;
                    }

                    if (isset($item['image_options']['caption'])) {
                        $itemDescription = $item['image_options']['caption'];
                    } else {
                        $itemDescription = false;
                    }

                    if (isset($item['image_options']['link'])) {
                        $itemLink = $item['image_options']['link'];
                    } else {
                        $itemLink = false;
                    }
                } else {
                    $itemTitle = false;
                    $itemDescription = false;
                    $itemLink = false;
                }
                ?>
                <div class="px-3 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <img src="<?php print thumbnail($item['filename'], 730, 480, true); ?>" class="m-auto  "/>
                        <?php print $itemTitle ? '<h5 class="pt-3">'.$itemTitle.'</h5>' : '';  ?>
                        <p class="mt-3 mx-auto" style="max-width: 80%;"><?php print $itemDescription; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php endif; ?>
