<?php
namespace backend\controllers;

use common\helpers\Tools;
use Yii;
use yii\log\Logger;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * 展示前端数据的控制器
 * Class SiteController
 * @package backend\controllers
 */
class SiteController extends Controller
{
    public $layout = 'main';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        Tools::getClientIpInfo();
        return $this->render('index');
    }

    public function action404(){
        return $this->render('404');
    }

    public function actionTest(){
        echo 'test';
    }

    public function actionHome(){
        Yii::$app->name = 'MYH';
        $this->getView()->title = 'sds';
        return $this->render('home');
    }

    public function actionGetIpInfo(){

    }
}
