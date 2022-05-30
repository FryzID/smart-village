<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKeteranganMiskin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Miskins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-keterangan-miskin-view">
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
            // 'nik_id',
            'dataPenduduk.nik',
            'no_telp',
            'keterangan:ntext',
            // 'surat_pernyataan_miskin',
            'desa_pengantar',
            // 'lampiran_ktp',
            'lampiran_kk',
            // 'status',
            'status1.nama',
            // 'flag',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            'approval_date_kades',
            // 'kades_id',
            [
                'label' => 'Nama Kades',
                'attribute' => 'kades.name',
            ],
            'approval_date_camat',
            'camat_id',
        ],
    ]) ?>
</div>
    </div>
</div>

</div>
