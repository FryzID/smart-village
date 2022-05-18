<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Modal;
use yii\widgets\Pjax;
use backend\models\LaporAduan;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Data Laporan Masalah';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="table-responsive text-center mt-5">
        <table class="table table-center">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kategori Pembangunan</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Aduan</th>
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
                    <td><?= $item->pembangunan->nama_pembangunan ?></td>
                    <td><?= $item->deskripsi ?></td>
                    <td><?= $item->created_at ?></td>
                    <td><?= $item->user->username ?></td>
                    <td>
                        <?php if ($item->status == 'laporanbaru') { ?>
                            <span class="badge badge-secondary"><?= $item->status ?></span>
                        <?php } ?>
                        <?php if ($item->status == 'dipending') { ?>
                            <span class="badge badge-info"><?= $item->status ?></span>
                        <?php } ?>
                        <?php if ($item->status == 'ditolak') { ?>
                            <span class="badge badge-danger"><?= $item->status ?></span>
                        <?php } ?>
                        <?php if ($item->status == 'diverifikasi') { ?>
                            <span class="badge badge-success"><?= $item->status ?></span>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($item->status != 'diverifikasi') { ?>
                            <?= Html::button('<i class="fa-regular fa-pen-to-square"></i>', ['class' => 'btn btn-info btn-sm', 'data-toggle' => 'modal', 'data-target' => '#verifikasi']); ?>
                            <?= Html::a('<i class="fa-regular fa-pen-to-square"></i>', ['/operator/lapor-aduan/verifikasi', 'id' => $item->id],['class' => 'btn btn-info btn-sm']); ?>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
<?php
    $script = <<< JS
    $(function(){
        $('.modalButton').click(function (){
            $.get($(this).attr('href'), function(data) {
                $('#modal').modal('show').find('#modalContent').html(data)
            )};
        });
        return false;
    });
    JS;
    $this->registerJs($script);
?>


