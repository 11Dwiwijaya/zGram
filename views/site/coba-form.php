<?php

use yii\helpers\html;

use yii\widgets\ActiveForm;
?>
<p>Kamu membuka form coba</p>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<div class="form-group">
    <?= Html::submitButton('Kirim', ['class' => 'btn btn-secondary']) ?>
</div>

<?php ActiveForm::end(); ?>