<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\UploadImage;
use app\models\Image;
use yii\helpers\FileHelper;
use yii\helpers\BaseFileHelper;



class SiteController extends Controller
{
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





// Загружаем изображение
    
    
public function actionUpload()
{
        if(empty($_SESSION['__id']))
        {
            $model = new UploadImage();
            return $this->render('upload', ['model' => $model]);
        }

        $images = Image::find()
            ->where(['user_id' => $_SESSION['__id']])
            ->all();

        $model = new UploadImage();
        $new_image = new Image();

        if(Yii::$app->request->isPost)
            {
                $path = 'uploads/' . Yii::$app->user->id . '/';
                FileHelper::createDirectory($path);
                $model->images = UploadedFile::getInstances($model, 'images');

                $new_image->link = $path . $model->images[0]->name;
                $new_image->user_id = $_SESSION['__id'];

                if ($model->upload() and $new_image->save())
                {
                    return $this->render('upload', ['model' => $model, 'images' => $images ,'new_image' => $new_image]);
                }




            }
    return $this->render('upload', ['model' => $model, 'images' => $images]);

}


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

// Регистрация

 public function actionSignup(){
 if (!Yii::$app->user->isGuest) {
 return $this->goHome();
 }
 $model = new SignupForm();
 if($model->load(\Yii::$app->request->post()) && $model->validate()){
     $user = new User();
     $user->username = $model->username;
     $user->password = \Yii::$app->security->generatePasswordHash($model->password);
     // $path = 'uploads/' . $user->id;


     if($user->save()){

         return $this->goHome();
     }
 }

 return $this->render('signup', compact('model'));
}





    /**
     * Login action.
     *
     * @return Response|string
     */
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
}
