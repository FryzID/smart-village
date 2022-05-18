<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<h3 class="text-center mb-5">Detail Data Pembangunan</h3>

<?php foreach ($pembangunan as $item) { ?>
<div class="card mb-5">
    <div class="card-body">
       <div class="table-responsive mb-3">
            <table class="table table-striped table-bordered">
                <tbody>
                    <h3 class="my-5 text-center"><?= $item->nama_pembangunan ?></h3>
                    <tr>
                        <th>Kategori Pembangunan</th>
                        <td><?= $item->kategoriPembangunan->nama ?></td>
                    </tr>
                    <tr>
                        <th>Status Pembangunan</th>
                        <td><?= $item->statusPembangunan->nama ?></td>
                    </tr>
                    <tr>
                        <th>Anggaran</th>
                        <td><?= "Rp. " . number_format($item->anggaran) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Mulai</th>
                        <td><?= $item->tgl_mulai ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Selesai</th>
                        <td><?= $item->tgl_selesai ?></td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td><?= $item->keterangan ?></td>
                    </tr>
                    <tr>
                        <th>Presentase</th>
                        <td><?= $item->presentase ?>%</td>
                    </tr>
                    <tr>
                        <th>Sumber Dana</th>
                        <td><?= $item->sumberDanaPembangunan->nama ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php } ?>
