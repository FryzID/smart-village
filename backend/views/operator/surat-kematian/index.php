<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\surat\SuratKematianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Kematians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-kematian-index">
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
            // 'nik',
            'dataPenduduk.nik',
            'nama',
            'alamat_lengkap',
            //'tanggal_lahir',
            //'jenis_kelamin',
            //'status_pernikahan',
            //'pekerjaan_id',
            //'agama_id',
            //'kewarganegaraan',
            //'tanggal_meninggal',
            //'umur_meninggal',
            //'tempat_meninggal',
            //'sebab_meninggal',
            //'penentu_meninggal',
            //'nama_pelapor',
            //'hubungan_pelapor',
            //'no_telp',
            //'lampiran_kk',
            //'flag',
            // 'status',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            //'created_at',
            //'upated_at',
            //'created_by',
            //'updated_by',
            //'desa_pengantar',
            //'approval_date_kades',
            //'kades_id',
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function($url, $model, $key) {
                        return Html::a('<i class = "fa-solid fa-print"></i>', Url::to(['/operator/surat-kematian/print', 'id' => $model->id]));
                    }
                ]
            ],
        ],
    ]); ?>

    </div>
    </div>
    
</div>
</div>
