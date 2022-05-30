<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratDomisiliPerorangan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Domisili Perorangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-domisili-perorangan-view">
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
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            'dataPenduduk.nik',
            'nik_alamat_lengkap',
            'nik_no_telp',
            'desa_domisili',
            'alamat_domisili',
            'rt_domisili',
            'rw_domisili',
            'keperluan',
            'lampiran_ktp',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            'approval_date_kades',
            // 'kades_id',
            [
                'label' => 'Nama Kades',
                'attribute' => 'user.name',
            ],
            // 'status',
            // 'status1.nama',
            // 'flag',
            // 'desa_pengantar',
        ],
    ]) ?>
    </div>
    </div>
</div>


</div>
