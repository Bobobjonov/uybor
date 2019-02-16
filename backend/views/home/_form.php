<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Home */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$data_0=\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),'id','name');
$data_1=\yii\helpers\ArrayHelper::map(\app\models\Davlat::find()->all(),'id','name');
$data_2=\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(),'id','name');
$data_3=\yii\helpers\ArrayHelper::map(\app\models\Tuman::find()->all(),'id','name');
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($data_0) ?>

    <?= $form->field($model, 'davlat_id')->dropDownList($data_1) ?>

    <?= $form->field($model, 'viloyat_id')->dropDownList($data_2) ?>

    <?= $form->field($model, 'tuman_id')->dropDownList($data_3) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_ground')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'live_ground')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'floor_id')->textInput() ?>

    <?= $form->field($model, 'full_floor')->textInput() ?>

    <?= $form->field($model, 'build_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tell')->checkbox() ?>

    <?= $form->field($model, 'video_cam')->checkbox() ?>

    <?= $form->field($model, 'cable')->checkbox() ?>

    <?= $form->field($model, 'tv')->checkbox() ?>

    <?= $form->field($model, 'muzlatgich')->checkbox() ?>

    <?= $form->field($model, 'candinsaner')->checkbox() ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rasm')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
