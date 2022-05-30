<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\surat\SuratDomisiliUsahaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Domisili Usahas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-domisili-usaha-index">
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
            'badan_usaha',
            'bidang_usaha',
            'alamat_badan_usaha',
            // 'nik_pemilik',
            'dataPenduduk.nik',
            'no_telp',
            // 'maksud',
            //'lampiran_ktp',
            //'lampiran_dokumen_pendukung',
            //'lampiran_foto_usaha',
            //'lampiran_keterangan_rt_rw',
            //'lampiran_surat_peryataan',
            //'desa_pengantar',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            // 'status',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            //'flag',
            //'approval_date_kades',
            //'kades_id',
            // [
            //     'label' => 'Nama Kades',
            //     'attribute' => 'kades.name',
            // ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function($url, $model, $key) {
                        return Html::a('<i class = "fa-solid fa-print"></i>', Url::to(['/operator/surat-domisili-usaha/print', 'id' => $model->id]));
                    }
                ]
            ],
        ],
        ]); ?>
        </div>
    </div>

</div>

</div>
