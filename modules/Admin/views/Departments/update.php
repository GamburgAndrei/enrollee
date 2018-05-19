<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Departments */

$this->title = 'Редактировать кафедру: ' . $model->Name_departments;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'faculties'=>$faculties,
    ]) ?>

</div>
