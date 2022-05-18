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

    <h1><?= Html::encode($this->title) ?></h1>

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
            'nik_ayah',
            'nama_ayah',
            'tanggal_lahir_ayah',
            'alamat_lengkap_ayah',
            'kewarganegaraan_ayah',
            'no_telp_ayah',
            'nik_ibu',
            'nama_ibu',
            'tanggal_lahir_ibu',
            'alamat_lengkap_ibu',
            'kewarganegaraan_ibu',
            'nama_pelapor',
            'hubungan_pelapor',
            'desa_pengantar',
            'lampiran_kk',
            'lampiran_surat_nikah',
            'lampiran_surat_kelahiran',
            'flag',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'approval_date_kades',
            'kades_id',
        ],
    ]) ?>

</div>
