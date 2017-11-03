<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main backend application asset bundle.
 */
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery.fancybox.min.css',
        'css/video-js.css'
    ];
    public $js = [
        'js/jquery.fancybox.min.js',
        'js/video.min.js'
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];

    /**
     * 定义按需加载css方法，注意加载顺序在最后
     * @param $view View|\yii\web\View
     * @param $cssFile
     */
    public static function addCss($view, $cssFile) {
        $view->registerCssFile($cssFile, [BackendAsset::className(), 'depends' => 'backend\assets\BackendAsset']);
    }

    /**
     * 定义按需加载JS方法，注意加载顺序在最后
     * @param $view View|\yii\web\View
     * @param $jsFile
     */
    public static function addScript($view, $jsFile) {
        $view->registerJsFile($jsFile, [BackendAsset::className(), 'depends' => 'backend\assets\BackendAsset']);
    }
}
