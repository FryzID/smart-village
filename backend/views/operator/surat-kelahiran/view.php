<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKelahiran */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Kelahirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-kelahiran-view">
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
            'nama',
            'jenis_kelamin',
            'tanggal_lahir',
            'berat',
            'tinggi',
            'tipe_kelahiran',
            'kembar_ke',
            'tempat_kelahiran',
            'tempat_kelahiran_desa',
            'penolong_kelahiran',
            [
                'label' => 'Nik Ayah',
                'attribute' => 'ayah.nik',
            ],
            [
                'label' => 'Nama Ayah',
                'attribute' => 'ayah.nama_lengkap',
            ],
            [
                'label' => 'Tanggal Lahir Ayah',
                'attribute' => 'ayah.tanggal_lahir',
            ],
            'alamat_lengkap_ayah',
            'kewarganegaraan_ayah',
            'no_telp_ayah',
            [
                'label' => 'Nik Ibu',
                'attribute' => 'ibu.nik',
            ],
            [
                'label' => 'Nama Ibu',
                'attribute' => 'ibu.nama_lengkap',
            ],
            [
                'label' => 'Tanggal Lahir Ayah',
                'attribute' => 'ibu.tanggal_lahir',
            ],
            'alamat_lengkap_ibu',
            'kewarganegaraan_ibu',
            'nama_pelapor',
            'hubungan_pelapor',
            'desa_pengantar',
            'lampiran_kk',
            // 'lampiran_surat_nikah',
            // 'lampiran_surat_kelahiran',
            // 'flag',
            // 'status',
            'status1.nama',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
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
