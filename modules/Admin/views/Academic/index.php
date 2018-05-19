<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Учебное направление';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новое учебное направление', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],



            [   'attribute'=>'ID_departments',
                'value'=> function($data){
                    return $data->departments->Name_departments;
                }

            ],
            'Name_academic_direction',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
