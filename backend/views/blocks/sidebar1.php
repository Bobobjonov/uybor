<?php
$url = Yii::$app->homeUrl.'backend/';
?>
<aside >
    <div style="background-color: black; color: white" id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="<?= $url?>assets/img/logo.svg" class="img" height="40" width="190"></a></p>
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
                <a class="<?=($controller=='davlat')?'active':''?>" href="<?=\yii\helpers\Url::to(['davlat/'])?>" >
                    <i class="fa fa-map"></i>
                    <span>Davlat</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?=($controller=='viloyat')?'active':''?>" href="<?=\yii\helpers\Url::to(['viloyat/'])?>" >
                    <i class="fa fa-map-marker"></i>
                    <span>Viloyat</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?=($controller=='tuman')?'active':''?>" href="<?=\yii\helpers\Url::to(['tuman/'])?>" >
                    <i class="fa fa-flag"></i>
                    <span>Tuman</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
