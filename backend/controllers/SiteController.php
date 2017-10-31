<?php
namespace backend\controllers;

use Yii;
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
    public $layout = 'web';

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
        return $this->render('index');
    }

    public function action404(){
        return $this->render('404');
    }

    public function actionHome(){
        return $this->render('home');
    }
}
