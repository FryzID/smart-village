<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKeteranganDesa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-keterangan-desa-view">
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
            'judul_surat',
            'no_surat',
            // 'kades_id',
            'nik_id',
            'no_telp',
            'keterangan:ntext',
            'keperluan',
            'lampiran_ktp',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'status',
            // 'status1.nama',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            // 'flag',
            'desa_pengantar',
            [
                'label' => 'Nama Kades',
                'attribute' => 'kades.name',
            ],
            'approval_date_kades',
        ],
    ]) ?>
    </div>
    </div>
</div>

</div>
