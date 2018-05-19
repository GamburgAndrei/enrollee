<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\Departments */

$this->title = 'Новая кафедра';
$this->params['breadcrumbs'][] = ['label' => 'Кафедра', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'faculties'=>$faculties,
    ]) ?>

</div>
