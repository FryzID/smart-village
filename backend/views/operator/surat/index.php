<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'Surat Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<h3 class="text-center mb-5">Surat Kelahiran</h3>

<div class="table-responsive text-center mb-5">
    <table class="table table-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Deskripsi</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor = 1?>
        <?php ?>
            <tr>
                <th><?php $nomor++ ?></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <?= Html::button('<i class="fa-regular fa-eye"></i>', ['class' => 'btn btn-warning btn-sm', 'data-toggle' => 'modal', 'data-target' => '#verifikasi']); ?>
                    <?= Html::a('<i class="fa-regular fa-pen-to-square"></i>', ['/operator/lapor-aduan/verifikasi'],['class' => 'btn btn-info btn-sm']); ?>
                </th>
            </tr>
        <?php  ?>
        </tbody>
    </table>
</div>

<h3 class="text-center mt-5 mb-5">Surat Kematian</h3>

<div class="table-responsive text-center mb-5">
    <table class="table table-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Deskripsi</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor = 1?>
        <?php ?>
            <tr>
                <th><?php $nomor++ ?></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <?= Html::button('<i class="fa-regular fa-eye"></i>', ['class' => 'btn btn-warning btn-sm', 'data-toggle' => 'modal', 'data-target' => '#verifikasi']); ?>
                    <?= Html::a('<i class="fa-regular fa-pen-to-square"></i>', ['/operator/lapor-aduan/verifikasi'],['class' => 'btn btn-info btn-sm']); ?>
                </th>
            </tr>
        <?php  ?>
        </tbody>
    </table>
</div>

<h3 class="text-center mt-5 mb-5">Surat Keterangan Desa</h3>

<div class="table-responsive text-center mb-5">
    <table class="table table-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Keperluan</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor = 1?>
        <?php foreach ($suratDesa as $item) { ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $item->judul_surat ?></td>
                <td><?= $item->keperluan ?></td>
                <td><?= $item->created_at ?></td>
                <td><?= $item->statusSurat->nama ?></td>
                <td>
                    <?= Html::a('<i class="fa-regular fa-eye"></i>', ['/operator/surat-masuk/show-data', 'id' => $item->id],['class' => 'btn btn-warning btn-sm']); ?> 
                    <?= Html::a('<i class="fa-regular fa-pen-to-square"></i>', ['/operator/surat-masuk/verifikasi-status', 'id' => $item->id],['class' => 'btn btn-info btn-sm']); ?>
                    <?= Html::a('<i class="fa fa-print"></i>', ['/operator/surat-masuk/print-data', 'id' => $item->id],['class' => 'btn btn-primary btn-sm']); ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<h3 class="text-center mt-5 mb-5">Surat Keterangan Miskin</h3>

<div class="table-responsive mb-5">
    <table class="table table-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Deskripsi</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor = 1?>
        <?php foreach ($suratMiskin as $item) { ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $item->no_surat ?></td>
                <td><?= $item->keterangan ?></td>
                <td><?= $item->created_at ?></td>
                <td><?= $item->statusKeterangan->nama ?></td>
                <td>
                    <?= Html::a('<i class="fa-regular fa-eye"></i>', ['/operator/surat-masuk/show-data', 'id' => $item->id],['class' => 'btn btn-warning btn-sm']); ?>
                    <?= Html::a('<i class="fa-regular fa-pen-to-square"></i>', ['/operator/surat-masuk/verifikasi-status', 'id' => $item->id],['class' => 'btn btn-info btn-sm']); ?>
                    <?= Html::a('<i class="fa fa-print"></i>', ['/operator/surat-masuk/print-data', 'id' => $item->id],['class' => 'btn btn-primary btn-sm']); ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

