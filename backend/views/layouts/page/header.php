<?php
use yii\helpers\Html;
use yii\bootstrap4\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <?php if (Yii::$app->user->isGuest) { ?>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <?= Html::a('Login', ['/site/login'], ['class' => 'nav-link']) ?>                             
                    </li>
                </ul>
            </div>
        <?php } else { ?>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <?= Html::a('<i class="fa-solid fa-right-from-bracket"></i> Logout', ['site/logout'], ['data' => ['method' => 'post'], 'class' => 'nav-link']) ?>
                    </li>
                </ul>
            </div>
        <?php } ?>
  </nav>
<!-- /.navbar -->