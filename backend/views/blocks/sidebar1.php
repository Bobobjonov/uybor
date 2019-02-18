<?php
$url = Yii::$app->homeUrl.'backend/';
?>
<aside >
    <div style="background-color: black; color: white" id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="<?= $url?>assets/img/logo2.jpg" class="img" ></a></p>
                <?php $controller= Yii::$app->controller->id; ?>
            <li class="mt">
                <a class="<?=($controller=='')?'active':''?>" href="<?= \yii\helpers\Url::to('/site/') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Bosh Sahifa</span>
                </a>
            </li>

            <li class="sub-menu">
                <a class="<?=($controller=='home')?'active':''?>" href="<?=\yii\helpers\Url::to(['home/'])?>" >
                    <i class="fa fa-institution"></i>
                    <span>Hovli Uylar</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?=($controller=='category')?'active':''?>" href="<?=\yii\helpers\Url::to(['category/'])?>" >
                    <i class="fa fa-list"></i>
                    <span>Category</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?=($controller=='country')?'active':''?>" href="<?=\yii\helpers\Url::to(['country/'])?>" >
                    <i class="fa fa-map"></i>
                    <span>Country</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?=($controller=='region')?'active':''?>" href="<?=\yii\helpers\Url::to(['region/'])?>" >
                    <i class="fa fa-map-marker"></i>
                    <span>Region</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?=($controller=='district')?'active':''?>" href="<?=\yii\helpers\Url::to(['district/'])?>" >
                    <i class="fa fa-flag"></i>
                    <span>District</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
