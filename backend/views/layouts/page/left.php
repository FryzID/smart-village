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
         
          <?php if (Yii::$app->user->identity->roles_id == 7) { ?>

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-home"></i><p class="ml-1">Home</p>', ['/site/index'], ['class' => 'nav-link']) ?>
          </li>

            <li class="nav-item has-treeview">
              <?= Html::a('<i class="fa-solid nav-icon fa-database"></i><p class="ml-1">Data Pembangunan</p>', [''], ['class' => 'nav-link']) ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-building"></i><p class="ml-1">Pembangunan</p>', ['/operator/pembangunan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-shapes"></i><p class="ml-1">Kategori Pembangunan</p>', ['/operator/kategori-pembangunan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-money-bill-wave"></i><p class="ml-1">Sumber Dana</p>', ['/operator/sumber-dana-pembangunan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-address-book"></i><p class="ml-1">Mitra</p>', ['/operator/mitra/index'], ['class' => 'nav-link']) ?>
                  </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
              <?= Html::a('<i class="nav-icon fa-solid fa-envelope"></i><p class="ml-1">Kelola Surat</p>', [''], ['class' => 'nav-link']) ?>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Kelahiran</p>', ['/operator/surat-kelahiran/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Kematian</p>', ['/operator/surat-kematian/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Keterangan Desa</p>', ['/operator/surat-keterangan-desa/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Keterangan Miskin</p>', ['/operator/surat-keterangan-miskin/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Domisili Perorangan</p>', ['/operator/surat-domisili-perorangan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Domisili Usaha</p>', ['/operator/surat-domisili-usaha/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-envelope-open"></i><p class="ml-1">Surat Pengantar SKCK</p>', ['/operator/surat-pengantar-skck/index'], ['class' => 'nav-link']) ?>
                  </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
              <?= Html::a('<i class="nav-icon fas fa-gift"></i><p class="ml-1">Request User</p>', [''], ['class' => 'nav-link']) ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-building-circle-exclamation"></i><p class="ml-1">Request Pembangunan</p>', ['/operator/request-pembangunan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-bug"></i><p class="ml-1">Lapor Aduan</p>', ['/operator/lapor-aduan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-bullhorn"></i><p class="ml-1">Pengumuman</p>', ['/operator/pengumuman/index'], ['class' => 'nav-link']) ?>
                  </li>
                </ul>
            </li>

            <li class="nav-item">
              <?= Html::a('<i class="nav-icon fas fa-cubes"></i><p class="ml-1">Data Penduduk</p>', ['/operator/penduduk/index'], ['class' => 'nav-link']) ?>
            </li>

          <?php } elseif (Yii::$app->user->identity->roles_id == 1) { ?>

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fa-solid fa-home"></i><p class="ml-1">Home</p>', ['/site/index'], ['class' => 'nav-link']) ?>
          </li>

            <li class="nav-item has-treeview">
              <?= Html::a('<i class="nav-icon fas fa-user-cog"></i><p class="ml-1">Master User </p>', [''], ['class' => 'nav-link']) ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fas fa-user-edit"></i><p class="ml-1">User</p>', ['/admin/user/index'], ['class' => 'nav-link']) ?> 
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-flag"></i><p class="ml-1">Role</p>', ['/admin/roles/index'], ['class' => 'nav-link']) ?>
                  </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
              <?= Html::a('<i class="nav-icon fa fa-book"></i><p class="ml-1">Master Desa </p>', [''], ['class' => 'nav-link']) ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fa-solid fa-archway"></i><p class="ml-1">RT / RW</p>', ['/admin/rt-rw/index'], ['class' => 'nav-link']) ?> 
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fas fa-home-user"></i><p class="ml-1">Dusun</p>', ['/admin/dusun/index'], ['class' => 'nav-link']) ?>
                  </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
              <?= Html::a('<i class="nav-icon fas fa-cubes"></i><p class="ml-1">Master Penduduk </p>', [''], ['class' => 'nav-link']) ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fas fa-mosque"></i><p class="ml-1">Agama</p>', ['/admin/agama/index'], ['class' => 'nav-link']) ?> 
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fas fa-graduation-cap"></i><p class="ml-1">Pendidikan</p>', ['/admin/pendidikan/index'], ['class' => 'nav-link']) ?>
                  </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fas fa-briefcase"></i><p class="ml-1">Pekerjaan</p>', ['/admin/pekerjaan/index'], ['class' => 'nav-link']) ?>
                  </li>
                </ul>
            </li>

                  <li class="nav-item">
                    <?= Html::a('<i class="nav-icon fas fa-list-check"></i><p class="ml-1">Status Pembangunan</p>', ['/admin/status-pembangunan/index'], ['class' => 'nav-link']) ?> 
                  </li>
                
          <?php } ?>

        </ul>
      <nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>