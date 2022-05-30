<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratDomisiliUsaha */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Domisili Usahas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-domisili-usaha-view">
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
            'badan_usaha',
            'bidang_usaha',
            'alamat_badan_usaha',
            'nik_pemilik',
            'dataPenduduk.nik',
            'no_telp',
            'maksud',
            'lampiran_ktp',
            // 'lampiran_dokumen_pendukung',
            // 'lampiran_foto_usaha',
            // 'lampiran_keterangan_rt_rw',
            // 'lampiran_surat_peryataan',
            // 'desa_pengantar',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            // 'status',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            // 'flag',
            'approval_date_kades',
            [
                'label' => 'Nama Kades',
                'attribute' => 'kades.name',
            ],
        ],
    ]) ?>
    </div>
    </div>
</div>

</div>
