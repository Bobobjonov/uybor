<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Home */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'country_id',
            'region_id',
            'district_id',
            'name',
            'cost',
            'full_ground',
            'live_ground',
            'room_id',
            'floor_id',
            'full_floor',
            'build_product',
            'status_home',
            'description:ntext',
            'tell',
            'video_cam',
            'cable',
            'tv',
            'muzlatgich',
            'candinsaner',
            'fio',
            'm_tel',
            'm_email:email',
            'image',
        ],
    ]) ?>

</div>
