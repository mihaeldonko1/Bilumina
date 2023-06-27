<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>

<head>
    <title>{content_meta_title}</title>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>
    <link href="https://fonts.cdnfonts.com/css/milliard" rel="stylesheet">

    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap5js');
        mw.require('<?php print template_url(); ?>assets/plugins/mw-ui/assets/ui/plugins/js/plugins.js');
        mw.lib.require('bxslider');
        mw.lib.require('slick');
        mw.iconLoader()

            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('fontAwesome')
            .addIconSet('materialDesignIcons')
    </script>



    <?php print get_template_stylesheet(); ?>

    <link href="<?php print template_url(); ?>assets/css/main.css" rel="stylesheet"/>
    <link href="<?php print template_url(); ?>assets/templates_features/css/scss/styles-for-template.css" rel="stylesheet"/>
    <script src="<?php print template_url(); ?>assets/templates_features/js/js-for-template.js"></script>


    <?php include('template_settings.php'); ?>
</head>
 <body class="<?php print helper_body_classes(); ?>">

<?php if ($preloader == 'true'): ?>
    <div class="js-ajax-loading">
        <module type="logo" id="header-logo-loading" logo-name="header-logo" class="w-100"/>
    </div>
<?php endif; ?>

<div class="main">
    <div class="navigation-holder">
        <module type="layouts" template="menus/skin-1" template-filter="menus" id="header-layout"/>
    </div>

