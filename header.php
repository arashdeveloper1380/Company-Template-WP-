<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>
<!--Start Header-->
<?php 
    $group_header = myprefix_get_option('group_header'); $group_header = $group_header[0]; 
    $group_social = myprefix_get_option('group_social');
    $group_logo = myprefix_get_option('group_logo'); $group_logo = $group_logo[0]; 
?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <ul>
                        <li><?= $group_header['address'] ?></li>
                        <li><?= $group_header['mobile'] ?></li>
                    </ul>
                </div>
                <div class="header-social col-12 col-md-6">
                    <ul>
                        <?php foreach($group_social as $value) : ?>
                            <li><a href="<?= $value['link'] ?>"><i class="fa fa-<?= $value['icon'] ?>"></i></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php $option = array('theme_location' => 'main'); wp_nav_menu('option'); ?>
                </div>
                <div class="col-12 col-md-6">
                    <div class="logo">
                        <a href="">
                            <img src="<?= $group_logo['logo'] ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--End Header-->

<div class="clearfix"></div>