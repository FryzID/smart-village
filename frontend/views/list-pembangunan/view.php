<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */

$this->title = $model->nama_pembangunan;
$this->params['breadcrumbs'][] = ['label' => 'List Kegiatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="list-pembangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="my-3">
        <?= Html::a('Ajukan Laporan', ['lapor-aduan/form'], ['class' => 'btn btn-primary btn-lg btn-block']); ?>
    </div>

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
            'sumber_dana_pembangunan_id',
            'kategori_pembangunan_id',
            'status_pembangunan_id',
            'users_id',
            'mitra_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
