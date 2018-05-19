<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Academic */

$this->title = 'Редактирование учебного направления: ' . $model->Name_academic_direction;
$this->params['breadcrumbs'][] = ['label' => 'Academics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="academic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'academic'=>$academic,
    ]) ?>

</div>
