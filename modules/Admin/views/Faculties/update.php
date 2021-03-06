<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Faculties */

$this->title = 'Редактировать факультет: ' . $model->Name_faculties;
$this->params['breadcrumbs'][] = ['label' => 'Факультет', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="faculties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
