<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use common\models\User;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <nav id="sidebar">
        
    </nav>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="mainNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <?= Html::a('<i class="fa fa-home"></i> Home ', ['site/index'], ['class' => 'nav-link']) ?> 
                            </li>
                            <li class="nav-item">
                                <?= Html::a('<i class="fa fa-home"></i> Request Kegiatan ', ['/request-pembangunan/create'], ['class' => 'nav-link']) ?> 
                            </li>
                            <li class="nav-item">
                                <?= Html::a('<i class="fa fa-home"></i> Lapor Masalah ', ['/list-pembangunan/index'], ['class' => 'nav-link']) ?> 
                            </li>
                            <li class="nav-item">
                                <?= Html::a('<i class="fa fa-home"></i> Pembangunan ', ['/pembangunan/index'], ['class' => 'nav-link']) ?> 
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope"></i> Pengurusan Surat
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <?= Html::a('<i class="fa fa-circle-o text-red"></i> Data Surat - Surat Yang Diminta', ['data-surat/index']) ?> 
                                    </li>
                                    <li class="dropdown-item">
                                        <?= Html::a('<i class="fa fa-circle-o text-red"></i> Buat Surat IMB', ['/surat-imb/index']) ?> 
                                    </li>
                                    <li class="dropdown-item">
                                        <?= Html::a('<i class="fa fa-circle-o text-red"></i> Buat Surat Pencari Kerja', ['/surat-imb/index']) ?> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        </ul>
                    </div>

                <?php if (Yii::$app->user->isGuest) { ?>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <?= Html::a('Signup', ['/site/signup'], ['class' => 'nav-link']) ?>                             
                        </li>
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
            </div>
        </nav>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
