<!DOCTYPE html>
<html <?php print lang_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <script>
        mwAdmin = true;
        admin_url = '<?php print admin_url(); ?>';
    </script>

    <?php print \MicroweberPackages\Admin\Facades\AdminManager::headTags();    ?>

    <script type="text/javascript">
        mw.lib.require('jqueryui');
        mw.require("<?php print mw_includes_url(); ?>api/libs/jquery_slimscroll/jquery.slimscroll.min.js");
        mw.require("liveadmin.js");
        mw.require("<?php print mw_includes_url(); ?>css/wysiwyg.css");
        mw.require("<?php print mw_includes_url(); ?>css/components.css");
        mw.require("wysiwyg.js");
        mw.require("url.js");
        mw.require("options.js");
        mw.require("events.js");
        mw.require("admin.js");
        mw.require("editor_externals.js");
        mw.require("keys.js");
        mw.require("css_parser.js");
        mw.require("custom_fields.js");
        mw.require("session.js");
        mw.require("content.js");
        mw.require("upgrades.js");
        mw.require("tree.js");

        mw.lib.require('mwui');
        mw.lib.require('mwui_init');
        mw.lib.require('flag_icons', true);
        mw.require("<?php print mw_includes_url(); ?>css/admin.css", true);

        <?php /*  mw.require("<?php print mw_includes_url(); ?>css/helpinfo.css");
        mw.require("helpinfo.js");*/ ?>
        <?php if(_lang_is_rtl()){ ?>
        mw.require("<?php print mw_includes_url(); ?>css/rtl.css");
        <?php } ?>
    </script>
    <?php if (!isset($_REQUEST['no_toolbar'])): ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.mw-lazy-load-module').reload_module();

            if (self === top) {
                window.onhashchange = function () {
                    mw.cookie.set('back_to_admin', location.href);
                }
                mw.cookie.set('back_to_admin', location.href);
            }

            mw.$("#mw-quick-content,#mw_edit_pages_content,#mw-admin-content").click(function () {
                if (mw.helpinfo != undefined) {
                    mw.cookie.set('helpinfo', false, 4380);
                    $(".helpinfo_helper").fadeOut();
                }
            });
        });
        // mw.require("<?php print mw_includes_url(); ?>css/ui.css");
        mw.require("fonts.js");


    </script>
    <?php endif; ?>
    <?php event_trigger('admin_head'); ?>
    <?php event_trigger('mw.admin.header');; ?>

    <?php
    $enableLivewireScripts = true;
    if (isset($disableLivewireScripts) && $disableLivewireScripts) {
        $enableLivewireScripts = false;
    }

    $enableTopBar = true;
    if (isset($disableTopBar) && $disableTopBar) {
        $enableTopBar = false;
    }

    $enableNavBar = true;
    if (isset($disableNavBar) && $disableNavBar) {
        $enableNavBar = false;
    }
    ?>

    <?php if ($enableLivewireScripts) { ?>

        <?php print \Livewire\Livewire::scripts(); ?>
        <?php print \Livewire\Livewire::styles(); ?>

        <!-- Alpine v3 -->
        <script defer src="<?php print mw_includes_url(); ?>api/libs/alpine/alpine.min.js"></script>
        <!-- Livewire sortable -->
        <script defer src="<?php print mw_includes_url(); ?>api/libs/livewire-sortable/livewire-sortable.js"></script>

    <?php } ?>

    <?php if (config('app.debug') and is_logged()) { ?>

    <script type="text/javascript">
        window.__onerror_alert_shown = false;
        window.onerror = function (msg, url, lineNo, columnNo, error) {
            if ((typeof(msg) != 'undefined')  && !window.__onerror_alert_shown) {
                var string = msg;
                var message = [
                    'Message: ' + msg,
                    'URL: ' + url,
                    'Line: ' + lineNo,
                    'Column: ' + columnNo,
                    'Error object: ' + JSON.stringify(error)
                ].join(' \n ');

                console.log(message);
                mw.notification.error(msg,10000);

                return false;
            }
            window.__onerror_alert_shown = true;


        };

    </script>
    <?php } ?>




</head>



<body class="is_admin loading view-<?php print mw()->url_manager->param('view'); ?> action-<?php print mw()->url_manager->param('action'); ?>">

<?php if ($enableLivewireScripts) { ?>
<div>
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('NainRod')) {
    $componentId = $_instance->getRenderedChildComponentId('NainRod');
    $componentTag = $_instance->getRenderedChildComponentTagName('NainRod');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NainRod');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('NainRod', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php } ?>


<?php

// must be moved to ajax and to the notification class because its too slow to load
//$new_version_notifications = mw()->notifications_manager->get('rel_type=update_check&rel_id=updates');

$new_version_notifications = 0;
?>

<?php


$shop_disabled = true;
if(is_shop_module_enabled_for_user()){
    $shop_disabled = false;
}


//
//$shop_disabled = get_option('shop_disabled', 'website') == 'y';
//
//if (!$shop_disabled) {
//    if (!mw()->module_manager->is_installed('shop')) {
//        $shop_disabled = true;
//    }
//}
//
//if (!user_can_view_module(['module' => 'shop'])) {
//    $shop_disabled = true;
//}
?>

<script>
    $(document).ready(function () {
        $(".mw-admin-mobile-admin-sidebar-toggle").on('click', function () {
            $("#main-bar").toggleClass('mobile-active')
        })
        $("body").on('click', function (e) {
            if (!mw.tools.hasAnyOfClassesOnNodeOrParent(e.target, ['mw-admin-mobile-admin-sidebar-toggle'])) {
                $("#main-bar").removeClass('mobile-active')
            }

        })
    })


    function mw_admin_add_order_popup(ord_id) {
        var contentHolder = document.createElement('div');
        contentHolder.style.padding = '25px';
        var dlg = mw.dialog({
            content: contentHolder,
            title: !!ord_id ? '<?php _ejs('Edit order'); ?>' : '<?php _ejs('Add order'); ?>',
            width: 900
        });
        mw.spinner({element: contentHolder, size: 32})
        mw.load_module('shop/orders/admin/add_order', contentHolder, function (){
            contentHolder.style.padding = '0';
            mw.spinner({element: contentHolder, size: 32}).remove()
            dlg.center()
        }, { order_id: ord_id });
    }

</script>


<?php
if (!is_logged()) {
    return;
}
?>


<?php
$order_notif_html = false;
$new_orders_count = false;





$comments_notif_html = false;
//$new_comments_count = Auth::user()->unreadNotifications()->where('type', 'like', '%Comment%')->count();
//if ($new_comments_count) {
//    $comments_notif_html = '<span class="badge badge-success badge-pill mr-1 lh-0 d-inline-flex justify-content-center align-items-center" style="font-size: 11px; width: 20px; height:20px;">' . $new_comments_count . '</span>';
//}

$notif_html = '';
//$notif_count = Auth::user()->unreadNotifications()->count();
//if ($notif_count > 0) {
//    $notif_html = '<span class="badge badge-success badge-pill mr-1 lh-0 d-inline-flex justify-content-center align-items-center" style="font-size: 11px; width: 20px; height:20px;">' . $notif_count . '</span>';
//}
?>

<?php
$user_id = user_id();
$user = get_user_by_id($user_id);
?>




<div id="mw-admin-container">

    <?php if ($enableTopBar) { ?>
    <?php echo $__env->make('admin::layouts.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php } ?>



    <?php if (url_param('view')): ?>
    <script>
        $(document).ready(function () {
            if ($('body').find('.main-toolbar').length == 0) {
                $('main').prepend('<div id="info-toolbar" type="admin/modules/info" history_back="true"></div>');
                mw.reload_module('#info-toolbar');
            }
        })
    </script>
    <?php endif; ?>

    <div class="<?php if ($enableNavBar) { ?> main container  my-3 <?php } ?>">
    <?php if ($enableNavBar) { ?>
          <?php echo $__env->make('admin::layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php } ?>

<?php event_trigger('mw.admin.header.last'); ?>
<?php /**PATH C:\Users\HP\Desktop\Bilumina\Bilumina\src\MicroweberPackages\Admin/resources/views/layouts/partials/header.blade.php ENDPATH**/ ?>