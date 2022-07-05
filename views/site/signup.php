<?php

use yii\helpers\Url;


use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Sign-up';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Please fill out the following fields to login:</p>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-3 form-control autocomplete'],
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
]); ?>

already have account ? <a href="<?= Url::to(['/site/login',]); ?>">Login </a>
<hr>
<?= $form->field($model, 'name')->textInput(['autofocus' => true, 'options' => ['autocomplete' => 'off']]) ?>
<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'options' => ['autocomplete' => 'off']]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>


<div class="form-group">
    <div class="offset-lg-1 col-lg-11">

        <?= Html::submitButton('Sign-up', ['class' => 'btn btn-warning', 'name' => 'login-button']) ?>

    </div>
    <br>

</div>

<?php ActiveForm::end(); ?>