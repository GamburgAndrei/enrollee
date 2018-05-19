<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$prompt=['prompt'=>'Факультет'];
/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_faculties')->dropDownList(
        $faculties,
        $prompt
    ) ?>


    <?= $form->field($model, 'Name_departments')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
