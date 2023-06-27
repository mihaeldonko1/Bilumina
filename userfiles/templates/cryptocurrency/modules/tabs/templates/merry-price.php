<?php

/*

type: layout

name: Merry tabs

description: Merry

*/
?>

<style>
    .merry-tabs-button {
        background-color: #ffffff!important;
        border-color: #ffffff!important;
        color: #181E4E!important;
        padding: 20px 45px!important;
        margin: 0 20px;
    }

    .merry-navs-btn-pricing {
        border: 1px solid #181E4E;
        padding:  10px 0;
    }

    .merry-tabs-button.active, .merry-tabs-button:hover {
       background-color: #181E4E!important;
       border-color: #181E4E!important;
        color: #ffffff!important;

    }
</style>

<?php

if ($json == false) {
    print lnotif(_e('Click to edit tabs', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}

?>
<script>
    $(document).ready(function () {
        mw.tabs({
            nav: '#mw-tabs-module-<?php print $params['id'] ?> .mw-ui-btn-nav-tabs a',
            tabs: '#mw-tabs-module-<?php print $params['id'] ?> .mw-ui-box-tab-content'
        });
    });
</script>

<div id="mw-tabs-module-<?php print $params['id'] ?>"
     class="row mw-tabs-box-wrapper mw-module-tabs-skin-default">
    <div class="mw-ui-btn-nav merry-navs-btn-pricing mw-ui-btn-nav-tabs d-flex flex-wrap col-md-3 mx-auto mt-5 col-12 justify-content-center">
        <?php
        $count = 0;
        foreach ($json as $slide) {
            $count++;
            ?>
            <a class="merry-tabs-button btn btn-outline-primary my-xl-0 my-3 <?php if ($count == 1) { ?> active <?php } ?> " href="javascript:;"><?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><?php print isset($slide['title']) ? $slide['title'] : ''; ?></a>
        <?php } ?>
    </div>
    <div class="py-5">
        <?php
        $count = 0;
        foreach ($json as $key => $slide) {
            $count++;
            $edit_field_key = $key;
            if (isset($slide['id'])) {
                $edit_field_key = $slide['id'];
            }
            ?>
            <div class="column mw-ui-box-tab-content pt-3 text-center"
                 style="<?php if ($count != 1) { ?> display: none; <?php } else { ?>display: block; <?php } ?>">
                <div class="edit allow-drop" field="tab-item-<?php print $edit_field_key ?>"
                     rel="module-<?php print $params['id'] ?>">
                    <div class="element">
                        <br>
                        <module type="layouts" template="price_lists/skin-10"/>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
