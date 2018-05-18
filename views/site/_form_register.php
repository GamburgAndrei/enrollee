<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>



<div class="site-_form_register">

    <?php $form = ActiveForm::begin([
        'id' => 'register',
        'enableAjaxValidation' => true,
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
