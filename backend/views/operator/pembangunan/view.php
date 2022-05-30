<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pembangunan-view">
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
            'nama_pembangunan',
            'foto',
            'anggaran',
            'tgl_mulai',
            'tgl_selesai',
            'longitude',
            'latitude',
            'keterangan',
            'presentase',
            [
                'label' => 'Sumber Dana Pembangunan',
                'attribute' => 'sumberDanaPembangunan.nama'
            ],
            [
                'label' => 'Kategori Pembangunan',
                'attribute' => 'kategoriPembangunan.nama'
            ],
            [
                'label' => 'Status Pembangunan',
                'attribute' => 'statusPembangunan.nama'
            ],
            [
                'label' => 'Created By',
                'attribute' => 'users.name'
            ],
            [
                'label' => 'Nama Mitra',
                'attribute' => 'mitra.nama_mitra.nama'
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>
     </div>
    </div>
</div>

</div>
