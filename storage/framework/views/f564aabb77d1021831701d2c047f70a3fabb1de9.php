<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-list', [])->html();
} elseif ($_instance->childHasBeenRendered('iqXO1dU')) {
    $componentId = $_instance->getRenderedChildComponentId('iqXO1dU');
    $componentTag = $_instance->getRenderedChildComponentTagName('iqXO1dU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iqXO1dU');
} else {
    $response = \Livewire\Livewire::mount('admin-content-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('iqXO1dU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('asWPiXM')) {
    $componentId = $_instance->getRenderedChildComponentId('asWPiXM');
    $componentTag = $_instance->getRenderedChildComponentTagName('asWPiXM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('asWPiXM');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('asWPiXM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\HP\Desktop\Bilumina\Bilumina\src\MicroweberPackages\Content\resources\views/admin/content/index.blade.php ENDPATH**/ ?>