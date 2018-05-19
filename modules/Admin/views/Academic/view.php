<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Academic */

$this->title = $model->Name_academic_direction;
$this->params['breadcrumbs'][] = ['label' => 'Academics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [   'attribute'=>'ID_departments',
                'value'=> function($data){
                    return $data->departments->Name_departments;
                }

            ],

            'Name_academic_direction',
        ],
    ]) ?>

</div>
