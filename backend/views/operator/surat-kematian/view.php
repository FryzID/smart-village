<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKematian */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Kematians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-kematian-view">
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
            'dataPenduduk.nik',
            'nama',
            'alamat_lengkap',
            'tanggal_lahir',
            'jenis_kelamin',
            // 'status_pernikahan',
            // 'pekerjaan_id',
            // 'agama_id',
            // 'kewarganegaraan',
            'tanggal_meninggal',
            'umur_meninggal',
            'tempat_meninggal',
            'sebab_meninggal',
            'penentu_meninggal',
            'nama_pelapor',
            'hubungan_pelapor',
            'no_telp',
            'lampiran_kk',
            // 'flag',
            // 'status',
            // 'status1.nama',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            // 'created_at',
            // 'upated_at',
            // 'created_by',
            // 'updated_by',
            'desa_pengantar',
            'approval_date_kades',
            // 'kades_id',
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
