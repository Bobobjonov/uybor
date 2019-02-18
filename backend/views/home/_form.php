<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Home */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$data_0 = \yii\helpers\ArrayHelper::map(\backend\models\Category::find()->all(), 'id', 'name');
$data_1 = \yii\helpers\ArrayHelper::map(\backend\models\Country::find()->where(['status' => 'y'])->all(), 'id', 'name');
$data_2 = \yii\helpers\ArrayHelper::map(\backend\models\Region::find()->where(['status' => 'y'])->all(), 'id', 'name');
$data_3 = \yii\helpers\ArrayHelper::map(\backend\models\District::find()->where(['status' => 'y'])->all(), 'id', 'name');
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-12">
        <?= $form->field($model, 'category_id')->dropDownList($data_0) ?>
    </div>
</div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'country_id')->dropDownList($data_1, ['prompt' => '-Choose a Name-',
                'onchange' => '
             $.post("' . Yii::$app->urlManager->createUrl('region/lists?id=') .
                    '"+$(this).val(),function( data ) 
                   {$( "select#home-region_id" ).html( data );});
                        ']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'region_id')->dropDownList($data_2,['prompt' => '-Choose a Name-',
                'onchange' => '
             $.post("' . Yii::$app->urlManager->createUrl('district/lists?id=') .
                    '"+$(this).val(),function( data ) 
                   {$( "select#home-district_id" ).html( data );});
                        ']) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'district_id')->dropDownList($data_3,['prompt' => '-Choose a Name-']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'm_tel')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'm_email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'full_ground')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'live_ground')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'room_id')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'floor_id')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'full_floor')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'build_product')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'tell')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'video_cam')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'cable')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'tv')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'muzlatgich')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'candinsaner')->checkbox() ?>
        </div>
    </div>





    <?= $form->field($model, 'status_home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>





    <?= $form->field($model, 'rasm')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
