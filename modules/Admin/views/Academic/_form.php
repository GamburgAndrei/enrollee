<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$prompt=['prompt'=>'Кафедра']

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Academic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_departments')->dropDownList(
            $academic,
            $prompt
    ) ?>

    <?= $form->field($model, 'Name_academic_direction')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
