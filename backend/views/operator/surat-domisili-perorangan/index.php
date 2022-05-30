<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\surat\SuratDomisiliPeroranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Domisili Perorangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-domisili-perorangan-index">
<div class="col-lg-12 mx-auto py-3">

    <div class="card card-outline card-primary">
        <h1 class="d-flex justify-content-center mb-2"><?= Html::encode($this->title) ?></h1>

        <div class="mt-3 ml-3">
            <?= Html::a('<i class="fas fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-primary']) ?>
        </div>

    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'no_surat',
            'nik',
            'dataPenduduk.nik',
            'nik_alamat_lengkap',
            'nik_no_telp',
            //'desa_domisili',
            //'alamat_domisili',
            //'rt_domisili',
            //'rw_domisili',
            //'keperluan',
            //'lampiran_ktp',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'approval_date_kades',
            //'kades_id',
            //'status',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            //'flag',
            //'desa_pengantar',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function($url, $model, $key) {
                        return Html::a('<i class = "fa-solid fa-print"></i>', Url::to(['/operator/surat-domisili-perorangan/print', 'id' => $model->id]));
                    }
                ]
            ],
        ],
        ]); ?>
        </div>
    </div>

</div>

</div>