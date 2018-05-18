<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * This is the model class for table "user".
 *
 * @property int $ID
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property string $code
 * @property int $active
 */
class User extends \yii\db\ActiveRecord
{
    const ACTIVE_USER = 1; // Потверждённый E-mail
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'email', 'password'], 'required'],
            [['active'], 'integer'],
            [['name', 'surname', 'patronymic', 'email', 'password', 'auth_key', 'code'], 'string', 'max' => 250],
            [['auth_key', 'code'],'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'email' => 'Email',
            'password' => 'Пароль',

        ];
    }
    /**
     *
     * Отправка писма с потверждением регистрации
     *
     * @return mixed
     */
    // Функция генирации и отправки письма для потверждения E-mail
    public function sendConfirmationLink()
    {

        $confirmationLinkUrl = Url::to(['site/confirmemail', 'email'=>$this->email, 'code'=>$this->code]);
        $confirmationLink = Html::a('Подтвердить Email', $confirmationLinkUrl);

        $sendingResult = Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setTo($this->email)
            ->setSubject('Пожалуйста, подтвердите свой Email')
            ->setTextBody('Для прохождения регистрации Вам необходимо подтвердить свой Email, перейдя по ссылке: ' . $confirmationLinkUrl)
            ->setHtmlBody('<p>Для прохождения регистрации Вам необходимо подтвердить свой Email, перейдя по ссылке ниже:</p>' . $confirmationLink)
            ->send();

        return $sendingResult;
    }







}
