<?php
namespace api\controllers;

use common\models\ProductCategory;
use common\models\Unit;
use Yii;
use yii\web\Controller;
use api\Helpers;

/**
 * Util controller
 */
class UtilController extends Controller
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

    /**
     * api get list units
     */
    public function actionGet_list_unit()
    {
        Helpers::jsonResponse(Unit::getListAvailableUnits());
    }

    /**
     * api get list categories
     */
    public function actionGet_list_categories() {
        Helpers::jsonResponse(ProductCategory::getListCategories());
    }

    public function actionTest_test() {
        echo 'test test test'; die;
    }
}
