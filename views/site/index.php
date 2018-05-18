<?php
/* @var $this yii\web\View */

?>
<header class="bg-gradient" id="home">
    <div class="container mt-5">
        <h1>Портал для абитуриентов КГТУ</h1>
        <p class="tagline"> Добро пожаловать на портал для абитуриентов КГТУ</p>

    </div>

</header>
<?php if( Yii::$app->session->hasFlash('success') ):?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>


<?php endif; ?>

<?php if( Yii::$app->session->hasFlash('info') ):?>

    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('info'); ?>
    </div>


<?php endif; ?>

<!-- вывод сообщения об ошибки-->
<?php if( Yii::$app->session->hasFlash('error') ):?>

    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>

<?php endif; ?>
<div class="section light-bg" id="features">


    <div class="container">

        <div class="section-title">

            <h3>Здесь вы сможете:</h3>
        </div>


        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-email gradient-fill ti-5x mr-5"></span>
                            <div class="media-body">
                                <h4 class="card-title">Получать информацию о планируемых мероприятиях</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-pencil-alt gradient-fill ti-5x mr-5"></span>
                            <div class="media-body">
                                <h4 class="card-title">Заполнить и подать заявление на зачисление в электронной форме</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-id-badge gradient-fill ti-5x mr-5"></span>
                            <div class="media-body">
                                <h4 class="card-title">Отслеживать персональную конкурсную ситуацию</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>

<div class="section" >

    <div class="container" >
        <div class="row">

            <div class="col-md-6 d-flex align-items-center">
                <div>

                    <h2>Заполнить заявление для поступления в несколько шагов:</h2>

                    <a href="index.php?id=8" class="btn btn-primary">Заполнить заявление</a></div>
            </div>
        </div>

    </div>

</div>

<div <div class="section light-bg">

    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <ul class="list-unstyled ui-steps">
                    <li class="media">
                        <div class="circle-icon mr-4">1</div>
                        <div class="media-body">
                            <h5>Зайти на страницу "Кабинет абитуриента"</h5>

                        </div>
                    </li>
                    <li class="media my-4">
                        <div class="circle-icon mr-4">2</div>
                        <div class="media-body">
                            <h5>Зарегистрироваться</h5>

                        </div>
                    </li>
                    <li class="media">
                        <div class="circle-icon mr-4">3</div>
                        <div class="media-body">
                            <h5>Заполнить заявление</h5>

                        </div>
                    </li>
                </ul>
            </div>


        </div>

    </div>

</div>

<div class="light-bg py-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <p class="mb-2"> <span class="ti-location-pin mr-2"></span> Адрес: 720044 Кыргызстан, г.Бишкек, пр.Мира 66</p>
                <div class=" d-block d-sm-inline-block">
                    <p class="mb-2">
                        <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:rector@kstu.kg">E-mail: rector@kstu.kg</a>
                    </p>
                </div>
                <div class="d-block d-sm-inline-block">
                    <p class="mb-0">
                        <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">+996-312-54-51-62</a>
                    </p>
                </div>

            </div>
            <div class="col-lg-6">

            </div>
        </div>

    </div>

</div>
