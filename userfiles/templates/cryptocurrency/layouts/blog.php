<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit main-content" data-layout-container rel="content" field="content">
        <module type="layouts" template="header/skin-26"/>
        <module type="layouts" template="blog/skin-10"/>

    </div>

<?php include template_dir() . "footer.php"; ?>
