<?php

use yii\helpers\html;

use yii\widgets\ActiveForm;
?>
<p>Signup</p>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <?= Html::submitButton('Signup', ['class' => 'btn btn-secondary']) ?>
</div>

<?php ActiveForm::end(); ?>