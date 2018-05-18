<?php
/**
 * Created by PhpStorm.
 * User: медведь
 * Date: 10.08.2017
 * Time: 23:04
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php if (Yii::$app->user->isGuest): ?>
    <div class="col-md-12">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'action' => '/site/login'
        ]); ?>

        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>


        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>
        <div class="text-right"><a href="<?= Url::to(['/site/restore']) ?>">Забыли пароль ?</a></div>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Войти', ['class' => 'button', 'name' => 'login-button']) ?>
                <br>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <div class="bottom text-center">
        Первый раз у нас ?
        <?= Html::a('Зарегистрироваться', Url::to(['/site/register'])/*, $options = []*/ ) ?>
    </div>

<?php else: ?>
<?= $model->username?>

    <?= Html::a('Выйти', Url::to(['/site/logout'])/*, $options = []*/ ) ?>

<?php endif; ?>
