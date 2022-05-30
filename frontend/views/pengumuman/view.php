<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Detil Pengumuman' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12 mx-auto py-3">
    <?php foreach ($pengumuman as $item) { ?>
    <div class="card card-outline card-secondary py-5">
        <div class="card-body">
            <h3 class="text-center">Perihal : <?= $item->perihal ?></h3>
            <h5 class="mt-5">Tanggal Pengumuman : <?= $item->tgl_pengumuman ?></h5>
            <h5 class="mt-5"><?= $item->isi ?></h5>
        </div>
    </div>

    <?php } ?>
</div>
