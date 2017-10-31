<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
?>
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Easma</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">主页 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">作品</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">随笔<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">生活</a></li>
                            <li><a href="#">游记</a></li>
                            <li class="divider"></li>
                            <li><a href="#">技术</a></li>
                            <li class="divider"></li>
                            <li><a href="#">关于</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="搜索随笔">
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">

            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
