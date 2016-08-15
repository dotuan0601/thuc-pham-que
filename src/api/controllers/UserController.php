<?php
namespace api\controllers;

use common\models\Agency;
use Yii;
use yii\web\Controller;
use api\Helpers;

/**
 * Site controller
 */
class UserController extends Controller
{
    protected $limit = 10;

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


    public function actionLogin() {
        echo 'vao day'; die;
    }

    /**
     * api find agencys by id
     *
     * @param $id
     */
    public function actionGet($id)
    {
        $agenncy = Agency::findOne(array('id' => $id));

        Helpers::jsonResponse($agenncy->toArray());
    }


    /**
     * api get list agency
     *
     * @param int $page
     */
    public function actionList($page = 0) {
        // get list agency
        $offset = $page*$this->limit;
        $list_agency_raw = Agency::find()
            //->where(['is_actived' => Agency::ACTIVE_STATUS])
            ->orderBy('id DESC')
            ->limit($this->limit, $offset)
            ->all();

        $list_agency = array();
        foreach ($list_agency_raw as $agency) {
            $list_agency[] = $agency->toArray();
        }

        Helpers::jsonResponse($list_agency);
    }
}
