<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">


<head>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->registerCsrfMetaTags() ?>
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <?php $this->head() ?>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
<?php $this->beginBody()?>

<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="/site/index">Главная <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/site/greeting">Кабинет абитуриента</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/site/aut">Новости</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/site/register">Регистрация</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#contact">Авторизация</a> </li>


                            <?php
                            NavBar::begin([


                                'options' => [
                                    'class' => 'navbar-inverse navbar-fixed-top',
                                ],
                            ]);

                            echo Nav::widget([
                                'options' => ['class' => 'navbar navbar-dark navbar-expand-lg'],
                                'items' => [

                                    Yii::$app->user->isGuest ? (
                                    ['label' => 'Login', 'url' => ['/site/login']]
                                    ) : (
                                        '<li>'
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->name  . ')',
                                            ['class' => 'btn btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                    )
                                ],
                            ]);
                            NavBar::end();

                            ?>



                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<header class="bg-gradient" id="home">
</header>

<?= $content ?>



<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage()?>