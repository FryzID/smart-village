<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Data Request Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="table-responsive text-center">
        <table class="table table-center">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Request</th>
                    <th>Pelapor</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php $nomor = 1?>
            <?php foreach ($data as $item) {?>
                <tr>
                    <th scope="row"><?= $nomor++ ?></th>
                    <td><?= $item->judul ?></td>
                    <td><?= $item->deskripsi ?></td>
                    <td><?= $item->created_at ?></td>
                    <td><?= $item->user->username ?></td>
                    <td>
                        <?php if ($item->statu == 'terverifikasi') { ?>
                            <span class="badge badge-success"><?= ucwords($item->statu) ?></span>
                        <?php } elseif ($item->statu == 'ditindaklanjuti') { ?>
                            <span class="badge badge-info"><?= ucwords($item->statu) ?></span>
                        <?php } elseif ($item->statu == 'requestbaru') { ?>
                            <span class="badge badge-secondary"><?= ucwords($item->statu) ?></span>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($item->statu != 'terverifikasi') { ?>
                            <?= Html::a('<i class="btn btn-info btn-sm fa-regular fa-pen-to-square"></i>', ['operator/request-pembangunan/verifikasi', 'id' => $item->id]); ?>
                            <!-- <a onclick="verifikasiData<?=($item->id)?>" class="btn btn-info btn-xs glyphicon glyphicon-pencil"
                            title="VerifikasiData"></a> -->
                            <i class="btn btn-danger btn-sm fa-regular fa-trash-can"></i>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>


