<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\controllers\CustomController;
use yii\web\Response;
use yii\widgets\ActiveForm;

class SiteController extends CustomController
{
    public $Password;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->setMeta('Enrollee KSTU','Portal enrollee KSTU', 'Портал абитуриентов КГТУ');
        return $this->render('index');
    }



    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionRegister()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->redirect('/');
        }
        // Подключаемся к модели
        $model = new User();
        // Если чтото пришло

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()))
        {
            $this->Password = $model->password;
            if(!User::find()->where(['email'=> $model->email])->limit(1)->all())
            {
               /* $model->password= Yii::$app->security->generatePasswordHash($model->password);*/
                $model->code = Yii::$app->getSecurity()->generateRandomString(10);
                $model->active = 0;
                if ($model->save())
                {
                    $model->sendConfirmationLink();
                    Yii::$app->session->setFlash('success', " Выслана ссылка для потверждения Вашей почты.");
                    return $this->redirect('/site/login');
                }
                else
                {
                    Yii::$app->response->format = Response::FORMAT_JSON;
                    return ActiveForm::validate($model);
                }
            }
            else {
                return $this->redirect('/');
            }
        }
        return $this->renderAjax('_form_register', compact('model'));
    }

    public function actionConfirmemail()
    {
        // Если пользователь авторизован, то возврощаем на домашнюю страницу
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        // разбираем ссылку
        $code = htmlspecialchars(Yii::$app->request->get('code'));
        $email = htmlspecialchars(Yii::$app->request->get('email'));

        // Ищим пользователя с таким E-mail и code
        $model = User::find()->where(['email' => $email, 'code' => $code])->one();
        // Если нашли
        if ($model->ID)
        {
            $model->code = '';
            $model->active = User::ACTIVE_USER;
            $model->save();
            Yii::$app->session->setFlash('success', "Ваш E-mail потверждён.");
            return $this->redirect('/site/login');
        }
        else
        {
            return $this->goHome();
        }

    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /*Вызов страницы приветствия*/
    public function actionGreeting(){
        return $this->render('greeting');
    }
    /*Вызов страницы регистрации*/


    public function actionFunctions(){
        return $this->render('functions');
    }

    public function actionHigher(){
        return $this->render('higher');
    }
    public function actionAnketa(){
        return $this->render('anketa');
    }
    public function actionRacing(){
        return $this->render('racing');
    }
    public function actionNews(){
        return $this->render('news');
    }
    public function actionKonkurs(){
        return $this->render('konkurs');
    }
    public function actionAut(){
        return $this->render('greeting1');
    }
    public function actionSend(){
        return $this->render('send');
    }
    public function actionAuthor()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->redirect('/');
        }
        // Подключаемся к модели
        $model = new User();
        // Если чтото пришло

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()))
        {
            $this->Password = $model->password;
            if(User::find()->where(['email'=> $model->email])->limit(1)->all())
            {
                /* $model->password= Yii::$app->security->generatePasswordHash($model->password);
                 $model->code = Yii::$app->getSecurity()->generateRandomString(10);
                 $model->active = 0;
                 if ($model->save())
                 {
                     return $this->redirect('/');
                 }
                 else
                 {
                     Yii::$app->response->format = Response::FORMAT_JSON;
                     return ActiveForm::validate($model);
                 }*/
                return $this->render('greeting');
            }
            else {
                return $this->redirect('/site/index');
            }
        }
        return $this->renderAjax('_form_authorization1', compact('model'));
    }

}
