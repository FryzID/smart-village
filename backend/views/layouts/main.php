<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use common\models\LaporAduan;
use common\models\RequestPembangunan;
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
    <?php 
        $request = RequestPembangunan::find()->where(['statu'=>'requestbaru'])->count();
        $lapor = LaporAduan::find()->where(['status'=>'laporanbaru'])->count();
    ?>
    <nav class="navbar navbar-dark bg-dark sticky-lg-top">
    <div class="container-fluid">
        <a href="site/index" class="navbar-brand"><?= Yii::$app->name ?></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if (Yii::$app->user->identity->roles_id == 7) { ?>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="badge badge-success"><?= $request ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">Anda Memiliki <?= $request?> <br> Request Pembangunan Baru</li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fa-solid fa-bell"></i>
                    <span class="badge badge-warning"><?= $lapor ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">Anda Memiliki <?= $lapor ?> <br> Laporan Aduan Baru</li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?= Html::a('<i class="fa fa-home"></i> Home ', ['site/index'], ['class' => 'nav-link']) ?> 
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa-solid fa-database"></i>
                            <span>Data Pembangunan</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Pembangunan', ['/operator/pembangunan/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Kategori Pembangunan', ['/operator/kategori-pembangunan/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Sumber Dana', ['/operator/sumber-dana-pembangunan/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Mitra', ['/operator/mitra/index']) ?> 
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa-solid fa-message"></i>
                            <span>Kelola Surat</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Surat Masuk', ['/operator/surat-masuk/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Surat Kelahiran', ['/operator/surat-kelahiran/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Surat Kematian', ['/operator/surat-kematian/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Surat Keterangan Desa', ['/operator/surat-keterangan-desa/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Surat Keterangan Miskin', ['/operator/surat-keterangan-miskin/index']) ?> 
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <?= Html::a('<i class="fa fa-user-plus"></i> <span>Data Penduduk</span> ', ['/operator/penduduk/index'], ['class' => 'nav-link']) ?> 
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fa fa-bookmark"></i> <span>Request Pembangunan</span> ', ['/operator/request-pembangunan/index'], ['class' => 'nav-link']) ?> 
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fa fa-retweet"></i> <span>Lapor Aduan</span> ', ['/operator/lapor-aduan/index'], ['class' => 'nav-link']) ?> 
                    </li>
                    
                    <!-- <li class="nav-item">
                        <?= Html::a('<i class="fa fa-bug"></i> <span>Report</span> ', ['site/index'], ['class' => 'nav-link']) ?> 
                    </li> -->
                </ul>
            </div>

        <?php } elseif (Yii::$app->user->identity->roles_id == 1) { ?>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <?= Html::a('Home ', ['site/index'], ['class' => 'nav-link']) ?> 
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-book"></i>
                            <span>Master Desa</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> RT/RW', ['/admin/rt-rw/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Dusun', ['/admin/dusun/index']) ?> 
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cubes"></i>
                            <span>Master Penduduk</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Agama', ['/admin/agama/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Pendidikan', ['/admin/pendidikan/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Pekerjaan', ['/admin/pekerjaan/index']) ?> 
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-database"></i>
                            <span>Master Pembangunan</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Status Pembangunan', ['/admin/status-pembangunan/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Status', ['/operator/kategori-pembangunan/index']) ?> 
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-users"></i>
                            <span>Master User</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> User', ['/admin/user/index']) ?> 
                            </li>
                            <li class="dropdown-item">
                                <?= Html::a('<i class="fa fa-circle-o text-red"></i> Role', ['/admin/roles/index']) ?> 
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php } ?>
            
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
