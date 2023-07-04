<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-pages-list', [])->html();
} elseif ($_instance->childHasBeenRendered('O3aX55s')) {
    $componentId = $_instance->getRenderedChildComponentId('O3aX55s');
    $componentTag = $_instance->getRenderedChildComponentTagName('O3aX55s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('O3aX55s');
} else {
    $response = \Livewire\Livewire::mount('admin-pages-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('O3aX55s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('QnqqQPF')) {
    $componentId = $_instance->getRenderedChildComponentId('QnqqQPF');
    $componentTag = $_instance->getRenderedChildComponentTagName('QnqqQPF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QnqqQPF');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('QnqqQPF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\HP\Desktop\Bilumina\Bilumina\src\MicroweberPackages\Page/resources/views/admin/page/index.blade.php ENDPATH**/ ?>