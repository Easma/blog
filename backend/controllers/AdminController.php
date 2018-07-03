<?php
namespace backend\controllers;


use yii\web\Controller;

/**
 * 后台管理的控制器
 * Class AdminController
 * @package backend\controllers
 */
class AdminController extends Controller
{

    public $layout = 'main';

    public function actionIndex(){
        $this->actionMomentList();
    }

    public function actionMomentList(){
        return $this->render('moment');
    }

    public function actionAddMoment(){
        return $this->render('moment');
    }

    public function actionUpdateMoment(){
        return $this->render('moment');
    }

    public function actionDelMoment(){
        return $this->render('moment');
    }

    public function actionPostList(){

    }

    public function actionPostDetail(){

    }

    public function actionAddPost(){

    }

    public function actionUpdatePost(){

    }

    public function actionDelPost(){

    }

}