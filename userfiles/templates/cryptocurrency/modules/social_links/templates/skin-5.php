<?php
/*

type: layout

name: Skin-5

description: Skin-5

*/
?>

<ul class="list-inline no-style mb-0">

    <?php if ($social_links_has_enabled == false) {
        print lnotif('Social links');
    } ?>

    <?php if ($facebook_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-facebook mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($twitter_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//twitter.com/<?php print $twitter_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-twitter mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($googleplus_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//plus.google.com/<?php print $googleplus_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-google-plus mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($pinterest_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//pinterest.com/<?php print $pinterest_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-pinterest mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($youtube_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//youtube.com/<?php print $youtube_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-youtube mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($instagram_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="https://instagram.com/<?php print $instagram_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-instagram mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($linkedin_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//linkedin.com/<?php print $linkedin_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-linkedin mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($github_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//github.com/<?php print $github_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-github mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($soundcloud_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//soundcloud.com/<?php print $soundcloud_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="mdi mdi-soundcloud mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($mixcloud_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//mixcloud.com/<?php print $mixcloud_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="fab fa-mixcloud mdi-24px"></i></a></div></li>
    <?php } ?>

    <?php if ($medium_enabled) { ?>
        <li class="mx-0 mb-2"><div class="bg-body rounded-circle square w-45px d-flex align-items-center justify-content-center"><a href="//medium.com/<?php print $medium_url; ?>" target="_blank" class="  text-opacity-5 position-absolute"><i class="fab fa-medium mdi-24px"></i></a></div></li>
    <?php } ?>
</ul>
