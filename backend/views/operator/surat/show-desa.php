<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Surat Keterangan Desa '. $dataDesa->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h3 class="text-center mb-5">Detail Data Surat Keterangan Desa <?= $dataDesa->id ?></h3>

<div class="table-responsive mb-5">
    <table class="table table-striped table-bordered">
        <tbody>

        <?php foreach ($modelDesa as $item) { ?>
            <tr>
                <th>Id</th>
                <td><?= $item->id ?></td>
            </tr>
            <tr>
                <th>No Surat</th>
                <td><?= $item->no_surat ?></td>
            </tr>
            <tr>
                <th>Judul Surat</th>
                <td><?= $item->judul_surat ?></td>
            </tr>
            <tr>
                <th>NIK</th>
                <td><?= $item->nik ?></td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td><?= $item->no_telp ?></td>
            </tr>
            <tr>
                <th>Keperluan</th>
                <td><?= $item->keperluan ?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td><?= $item->keterangan ?></td>
            </tr>
            <tr>
                <th>Pelapor</th>
                <td><?= $item->pelapor->username ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?= $item->statusSurat->nama ?></td>
            </tr>
            <tr>
                <th>Tanggal Dibuat</th>
                <td><?= $item->created_at ?></td>
            </tr>
            <tr>
                <th>Tanggal Diterima Kades</th>
                <td><?= $item->approval_date_kades ?></td>
            </tr>
            
        <?php } ?>

        </tbody>
    </table>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="text-center">Lampiran KTP</h5>
        <img src="" alt="">
    </div>
</div>
    