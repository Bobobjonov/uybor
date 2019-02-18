<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="text-center">
        <?= Html::a(' Home <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'category_id',

            [
                'attribute' => 'category_id',
                'value'=>'category.name',
                'filter'=>\yii\helpers\ArrayHelper::map(\backend\models\Category::find()->all(),'id','name')
            ],
//            'country_id',
//            'region_id',
//            'district_id',
            [
                'attribute' => 'district_id',
                'value' => 'district.name',
                'filter'=>\yii\helpers\ArrayHelper::map(\backend\models\District::find()->all(),'id','name')
            ],
            //'name',
            'cost',
            //'full_ground',
            'live_ground',
            'room_id',
            //'floor_id',
            //'full_floor',
            //'build_product',
            //'status_home',
            //'description:ntext',
            //'tell',
            //'video_cam',
            //'cable',
            //'tv',
            //'muzlatgich',
            //'candinsaner',
            //'fio',
            'm_tel',
            //'m_email:email',
            //'image',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}&nbsp{update}&nbsp{delete}',   //{view}&nbsp;
                'buttons' => [
                    'view' => function($url, $model)   {
                        return Html::a('<button class="btn btn-success">&nbsp;<i class="glyphicon glyphicon-eye-open"></i></button>',$url);
                    },
                    'update' => function($url, $model) {
                        return Html::a('<button class="btn btn-primary">&nbsp;<i class="glyphicon glyphicon-pencil"></i></button>',$url);
                    },
                    'delete' => function($url, $model) {
                        return Html::a('<button class="btn btn-danger">&nbsp;<i class="glyphicon glyphicon-trash"></i></button>', $url,
                            ['data-confirm' => 'Are you sure you want to delete this item?', 'data-method' =>'POST']
                        );
                    },

                ],
            ],
        ],
    ]); ?>
</div>
