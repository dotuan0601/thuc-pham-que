<?php
namespace api\controllers;

use Yii;
use yii\web\Controller;
use api\Helpers;

/**
 * Site controller
 */
class AgencyController extends Controller
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

    public function actionGet($id)
    {
        Helpers::jsonResponse(200, 'agency id: ' . $id);
    }
}
