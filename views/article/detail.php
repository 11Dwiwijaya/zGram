<?php

use yii\helpers\html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card mx-auto">
    <div class="card-header">Article</div>
    <div class="card-body">
        <h1><?= Html::encode($model->title) ?></h1>
        <?= ($model->content) ?>
        <br>
        <br>
        <hr>
        <table>
            <tr>
                <td><b>Author</b></td>
                <td>:</td>
                <td><?= Html::encode($model->author) ?></td>
            </tr>
            <tr>
                <td><b>Publish at </b></td>
                <td>:</td>
                <td><?= Html::encode($model->date) ?></td>
            </tr>
        </table>
    </div>
</div>
</main>