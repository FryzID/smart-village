<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratPengantarSkck */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pengantar Skcks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-pengantar-skck-view">
<div class="col-lg-12 mx-auto py-3">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

        <div style="margin-left: 20px">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
        </div>

    <div class="card-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_surat',
            // 'nik',
            [
                'label' => 'Nik',
                'attribute' => 'dataPenduduk.nik',
            ],
            // 'nama',
            [
                'label' => 'Nama',
                'attribute' => 'dataPenduduk.nama_lengkap',
            ],
            'alamat_lengkap',
            // 'jenis_kelamin',
            [
                'label' => 'Jenis Kelamin',
                'attribute' => 'dataPenduduk.jenis_kelamin',
            ],
            // 'tempat_lahir',
            [
                'label' => 'Tempat Lahir',
                'attribute' => 'dataPenduduk.tempat_lahir',
            ],
            // 'tanggal_lahir',
            [
                'label' => 'Tanggal Lahir',
                'attribute' => 'dataPenduduk.tanggal_lahir',
            ],
            // 'pekerjaan',
            // 'agama',
            'no_telp',
            'tujuan_pembuatan:ntext',
            'lampiran_ktp',
            // 'lampiran_kk',
            // 'lampiran_akte_kelahiran',
            // 'lampiran_pasfoto',
            // 'desa_pengantar',
            // 'status',
            // 'status1.nama',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            // 'flag',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            'approval_date_kades',
            [
                'label' => 'Nama Kades',
                'attribute' => 'kades.name',
            ],
            // 'kades_id',
            'approval_date_camat',
            [
                'label' => 'Nama Camat',
                'attribute' => 'camat.name',
            ],
            // 'camat_id',
            'approval_date_kasipel',
            // 'kasipel_id',
            [
                'label' => 'Nama Kasipel',
                'attribute' => 'kasipel.name',
            ],
        ],
    ]) ?>
    </div>
    </div>
</div>

</div>
