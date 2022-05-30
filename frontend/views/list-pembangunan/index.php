<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'List Kegiatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12 mx-auto py-3">
    <?php foreach ($kegiatan as $item) { ?>
    <div class="card card-outline card-primary mb-5">
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

            <div class="my-3">
                <a href="<?= Url::toRoute(['list-pembangunan/lapor', 'id' => $item->id]) ?>" class="btn btn-primary col-sm-12">Laporkan Masalah</a>
            </div>
        </div>
    </div>

    <?php } ?>
</div>
