<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Факультеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculties-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новый факультет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','visible'=>false],


            'Name_faculties',

            ['class' => 'yii\grid\ActionColumn',
             'header' => 'Действие',
            ],

        ],
    ]); ?>
</div>
