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
     class="mw-tabs-box-wrapper mw-module-tabs-skin-default">
    <div class="mw-ui-btn-nav mw-ui-btn-nav-tabs df">
        <?php
        $count = 0;
        foreach ($json as $slide) {
            $count++;
            ?>
            <a class="mw-ui-btn df <?php if ($count == 1) { ?> active <?php } ?>" href="javascript:;"><?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><h6 class="mb-0"><?php print isset($slide['title']) ? $slide['title'] : 'Tab title 1'; ?></h6></a>
        <?php } ?>
    </div>
    <div class="mw-ui-box">
        <?php
        $count = 0;
        foreach ($json as $key => $slide) {
            $count++;


            $edit_field_key = $key;
            if (isset($slide['id'])) {
                $edit_field_key = $slide['id'];
            }
            ?>
            <div class="mw-ui-box-content mw-ui-box-tab-content py-sm-0 py-3"
                 style="<?php if ($count != 1) { ?> display: none; <?php } else { ?>display: block; <?php } ?>">
                <div class="edit allow-drop" field="tab-item-<?php print $edit_field_key ?>"
                     rel="module-<?php print $params['id'] ?>">
                    <h6>  <?php print isset($slide['content']) ? $slide['content'] : 'Tab content ' . $count . '<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</P> ' ?></h6>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
