<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\articleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa-solid fa-plus"></i> Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
    zz
    <?= GridView::widget([
        'tableOptions' => [
            'class' => 'table table-striped',
        ],
        'options' => [
            'class' => 'table-responsive',
        ],
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_article',
            'title',
            // 'content:ntext',
            'author',
            [
                'header' => 'Date',
                'headerOptions' => ['style' => 'width :150px', 'class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
                'value' => function ($model) {
                    return date('d-M-Y', strtotime($model->date));
                }

            ],
            //'date',
            [
                'class' => ActionColumn::className(),
                'header' => 'Action',
                'headerOptions' => ['style' => 'width :200px', 'class' => 'text-center'],

                'template' => '{update}{view}{delete}',
                'contentOptions' => ['class' => 'text-center'],
                // 'width' => '100px',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('', $url, ['class' => 'm-1 btn btn-xs btn-warning fa fa-pencil']);
                    },
                    'view' => function ($url, $model) {
                        return Html::a('', $url, ['class' => 'm-1 btn btn-xs btn-primary fa fa-eye']);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('', $url, ['class' => 'm-1 btn btn-xs btn-danger fa fa-trash']);
                    }
                ],

            ],
        ],
    ]); ?>


</div>