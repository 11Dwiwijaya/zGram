<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa-solid fa-plus"></i> Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'username',
            'password',
            'name',
            // 'authKey',
            //'accessToken',
            //'status',
            //'time_updated',
            //'time_created',
            // [
            //     'header' => 'Role',
            //     'headerOptions' => ['style' => 'width :10px', 'class' => 'text-center'],
            //     'contentOptions' => ['class' => 'text-center'],
            //     'value' => function ($model) {
            //         return $model->id_role;
            //     }

            // ],
            'roles',

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