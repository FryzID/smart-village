<?php
use yii\helpers\Html;
use yii\models\base\Role;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<?php 
  $request = \backend\models\RequestPembangunan::find()->where(['statu'=>'requestbaru'])->count();
  $lapor = \backend\models\LaporAduan::find()->where(['status'=>'laporanbaru'])->count();
?>

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <?php echo Html::img('@web/adminLTE/dist/img/AdminLTELogo.png', ['alt'=> 'AdminLTE Logo', 'class'=>'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
      <span class="brand-text font-weight-light"><?= Yii::$app->name ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-home"></i><p class="ml-1">Home</p>', ['/site/index'], ['class' => 'nav-link']) ?>
          </li>
          
          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-building-circle-exclamation"></i><p class="ml-1">Request Kegiatan</p>', ['/request-pembangunan/request'], ['class' => 'nav-link']) ?>
          </li>

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-bug"></i><p class="ml-1">Lapor Masalah</p>', ['/list-pembangunan/index'], ['class' => 'nav-link']) ?>
          </li>

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-building"></i><p class="ml-1">Pembangunan</p>', ['/pembangunan/index'], ['class' => 'nav-link']) ?>
          </li>

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-bullhorn"></i><p class="ml-1">Pengumuman</p>', ['/pengumuman/index'], ['class' => 'nav-link']) ?>
          </li>
        </ul>
      <nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>