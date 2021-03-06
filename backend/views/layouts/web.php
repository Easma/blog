<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

//if (class_exists('backend\assets\AppAsset')) {
//    backend\assets\AppAsset::register($this);
//}

//dmstr\web\AdminLteAsset::register($this);

\backend\assets\BackendAsset::register($this);
//$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title)?></title>
    <meta name="author" content="马英豪">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->head() ?>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?= $this->render('nav.php') ?>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    愿历经千帆亦不忘初心
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i>主页</a></li>
                    <!--<li><a href="#">Layout</a></li>-->
                    <li class="active">动态</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?= $content ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>