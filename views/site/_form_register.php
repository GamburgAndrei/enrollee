<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Регистрация';
?>



<div class="site-_form_register container">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin([
        'id' => 'register',
      /*  'enableAjaxValidation' => true,*/
    ]); ?>

        <?= $form->field($model, 'name')->textInput() ?>
        <?= $form->field($model, 'surname')->textInput() ?>
        <?= $form->field($model, 'patronymic')->textInput() ?>
        <?= $form->field($model, 'password')->textInput(['type' => 'password']); ?>
        <?= $form->field($model, 'email') ->textInput()?>



    <div class="form-group">
        <?= Html::submitButton('Зарегистрироватся', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-_form_register -->
