<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Faculties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faculties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name_faculties')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
