<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="text-center">
        <?= Html::a('Category <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',

//            ['class' => 'yii\grid\ActionColumn'],
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
