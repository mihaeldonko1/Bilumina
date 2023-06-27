<?php

/*

type: layout

name: Posts 8

description: Posts 8

*/
?>

<div class="row text-center text-sm-center blog-posts-8">
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
            <div class="mx-auto col-sm-10 mx-md-0 col-md-6 col-lg-4 mb-6" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="h-100 d-flex flex-column border    hover-bg-body text-dark pb-6 pt-7 px-5  ">
                    <div class="d-block d-sm-flex align-items-center h-100">
                        <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center">
                            <?php echo $itemCats; ?>
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <a href="<?php print $item['link'] ?>" class="btn btn-link text-dark"><h4><?php print $item['title'] ?></h4></a>
                            <?php endif; ?>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p class="mb-2"><?php print $item['description'] ?></p>
                            <?php endif; ?>
                            <br/>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('read_more', $show_fields)): ?>

                            <div class="m-t-auto">
                                <a href="<?php print $item['link'] ?>" class="btn btn-link"><span><?php echo $read_more_text;?></span></a>

                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
