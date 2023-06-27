<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" data-layout-container rel="content" field="content">
    <module type="layouts" template="header/skin-21"/>
    <module type="layouts" template="content/skin-16"/>
    <module type="layouts" template="features/skin-43"/>
    <module type="layouts" template="features/skin-40"/>
    <module type="layouts" template="features/skin-30"/>
    <module type="layouts" template="team/skin-5"/>
    <module type="layouts" template="team/skin-1"/>
    <module type="layouts" template="features/skin-1"/>
    <module type="layouts" template="titles/skin-1"/>
    <module type="layouts" template="blog/skin-3"/>
</div>

<?php include template_dir() . "footer.php"; ?>
