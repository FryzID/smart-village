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
            'nik',
            'nama',
            'alamat_lengkap',
            'tanggal_lahir',
            'jenis_kelamin',
            'status_pernikahan',
            'pekerjaan_id',
            'agama_id',
            'kewarganegaraan',
            'tanggal_meninggal',
            'umur_meninggal',
            'tempat_meninggal',
            'sebab_meninggal',
            'penentu_meninggal',
            'nama_pelapor',
            'hubungan_pelapor',
            'no_telp',
            'lampiran_kk',
            'flag',
            'status',
            'created_at',
            'upated_at',
            'created_by',
            'updated_by',
            'desa_pengantar',
            'approval_date_kades',
            'kades_id',
        ],
    ]) ?>

</div>
