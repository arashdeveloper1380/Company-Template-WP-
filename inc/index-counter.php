<?php $group_counter_item = myprefix_get_option('group_counter_item'); ?>
<div class="counter-section">
    <div class="counter-overlay">
        <div class="container">
            <div class="row">
                <?php foreach($group_counter_item as $value) : ?>
                <div class="col-6 col-md-3">
                    <div class="counter-item text-center">
                        <div class="counter-icon">
                            <div class="fa fa-<?= $value['icon'] ?> fa-3x"></div>
                        </div>
                        <span class="counter"><?= $value['counter'] ?></span>
                        <h4><?= $value['title'] ?></h4>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>