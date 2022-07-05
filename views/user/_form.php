<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'password')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(['10' => 'Aktif', '0' => 'Nonaktif'], ['prompt' => 'Pilih Status']) ?>

    <?php $dataPost = ArrayHelper::map(\app\models\Role::find()->asArray()->all(), 'roles', 'role');
    echo $form->field($model, 'roles')->dropDownList($dataPost, ['prompt' => 'Pilih Role . . '], ['roles' => 'role']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>