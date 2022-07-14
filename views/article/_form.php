<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\article */
/* @var $form yii\widgets\ActiveForm */

?>
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style>
<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content', ['inputOptions' => ['id' => 'editor']])->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'author')->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->username]) ?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
        //'language' => 'ru',

        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php //print(Yii::$app->user->identity->username) 
    ?>

    <?php ActiveForm::end(); ?>
</div>