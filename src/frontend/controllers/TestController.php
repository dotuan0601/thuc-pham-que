<?php
namespace frontend\controllers;

use Yii;
use frontend\models\PasswordResetRequestForm;
use yii\web\Controller;

/**
 * Site controller
 */
class TestController extends Controller
{

    /**
     * @inheritdoc
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

    public function actionIndex()
    {
        echo 'test front-end'; die;
        return $this->render('index');
    }
}
