<?php

/*

type: layout

name: Posts 15

description: Posts 15

*/
?>

<div class="row blog-posts-3">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<small class="text-dark font-weight-bold d-inline-block mb-2  ">' . $category['title'] . '</small> ';
                }
            }
            ?>
            <div class="mx-auto mx-md-0 col-12 col-xl-4 mb-5" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="h-100 d-flex flex-column">
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>

                    <a href="<?php print $item['link'] ?>" class="btn btn-link d-block px-0">
                        <div class="img-as-background h-600">
                            <img src="<?php print thumbnail($item['image'], 950, 950); ?>" style="top: unset!important;" class=" "/>
                        </div>
                    </a>
                    <?php endif; ?>


                    <div class="pt-4 pb-3">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('created_at', $show_fields)): ?>

                            <small class="mb-3 d-block " style="color: #FF7A01;"><?php echo date(get_date_format_raw(), strtotime($item['created_at'])); ?></small>
                        <?php endif; ?>


                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <a href="<?php print $item['link'] ?>" class="btn btn-link text-dark mb-2 px-0"><h4 class="text-start text-left" style="color: #ffffff;"><?php print $item['title'] ?></h4></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
