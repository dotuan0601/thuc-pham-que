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


class AgencyController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionManage()
    {
        return $this->renderPartial('manage');
    }

    public function actionList()
    {
        return $this->renderPartial('list');
    }

    public function actionInfo()
    {
        return $this->renderPartial('info');
    }

    public function actionDetail()
    {
        return $this->renderPartial('detail');
    }
}