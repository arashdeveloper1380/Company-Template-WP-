<?php $group_company = myprefix_get_option('group_company'); $group_company = $group_company[0]; ?>
<?php $group_company_item = myprefix_get_option('group_company_item'); ?>
<!--Start Company-->
<div class="company-section">
    <div class="title-section text-center">
        <h2><?= $group_company['title'] ?></h2>
        <p><?= $group_company['desc'] ?></p>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($group_company_item as $value) : ?>
                <div class="col-6 col-md-3">
                    <a href="<?= $value['link'] ?>"><img src="<?= $value['icon'] ?>" alt=""></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div><!--End Company-->
<div class="clearfix"></div>