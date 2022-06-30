<?php
    $group_service = myprefix_get_option('group_service'); $group_service = $group_service[0]; 
    $group_service_item = myprefix_get_option('group_service_item');
?>
<!--Start Service-->
<div class="service-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center">
                <h2><?= $group_service['title'] ?></h2>
                <p><?= $group_service['desc'] ?></p>
            </div>
            <?php foreach($group_service_item as $value) : ?>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="service-item text-center wow fadeInUp">
                    <div class="icon shadow-around"><i class="fa fa-<?= $value['icon'] ?> fa-2x"></i></div>
                    <div class="service-text">
                        <h4><a href=""><?= $value['title'] ?></a></h4>
                        <p><?= $value['desc'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div><!--End Service-->

<div class="clearfix"></div>