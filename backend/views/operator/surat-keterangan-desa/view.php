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
            'judul_surat',
            'no_surat',
            'kades_id',
            'nik',
            'no_telp',
            'keterangan:ntext',
            'keperluan',
            'lampiran_ktp',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'status',
            'flag',
            'desa_pengantar',
            'approval_date_kades',
        ],
    ]) ?>

</div>
