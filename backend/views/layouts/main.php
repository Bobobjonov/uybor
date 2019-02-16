<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php if (!Yii::$app->user->isGuest):?>
        <?= Yii::$app->controller->renderPartial("../blocks/navbar") ?>
    <?php endif;?>

    <?php if (!Yii::$app->user->isGuest):?>
        <?= Yii::$app->controller->renderPartial("../blocks/sidebar1") ?>
    <?php endif;?>
    <section id="main-content" style="background-color: white">
        <section class="wrapper">
            <?= $content ?>
        </section>
    </section>
    </section>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
