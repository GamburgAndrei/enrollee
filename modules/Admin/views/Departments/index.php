<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Кафедры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новая кафедра', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],



            [   'attribute'=>'ID_faculties',
                'value'=> function($data){
                return $data->faculties->Name_faculties;
                }

            ],
            'Name_departments',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
