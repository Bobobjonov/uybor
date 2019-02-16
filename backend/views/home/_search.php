<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\HomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'davlat_id') ?>

    <?= $form->field($model, 'viloyat_id') ?>

    <?= $form->field($model, 'tuman_id') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'full_ground') ?>

    <?php // echo $form->field($model, 'live_ground') ?>

    <?php // echo $form->field($model, 'room_id') ?>

    <?php // echo $form->field($model, 'floor_id') ?>

    <?php // echo $form->field($model, 'full_floor') ?>

    <?php // echo $form->field($model, 'build_product') ?>

    <?php // echo $form->field($model, 'status_home') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'tell') ?>

    <?php // echo $form->field($model, 'video_cam') ?>

    <?php // echo $form->field($model, 'cable') ?>

    <?php // echo $form->field($model, 'tv') ?>

    <?php // echo $form->field($model, 'muzlatgich') ?>

    <?php // echo $form->field($model, 'candinsaner') ?>

    <?php // echo $form->field($model, 'fio') ?>

    <?php // echo $form->field($model, 'm_tel') ?>

    <?php // echo $form->field($model, 'm_email') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
