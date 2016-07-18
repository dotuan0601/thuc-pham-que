<?php
/**
 * Created by PhpStorm.
 * User: NguyenLuu
 * Date: 14-Jul-16
 * Time: 11:21 AM
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        return $this->renderPartial('login');
    }
}