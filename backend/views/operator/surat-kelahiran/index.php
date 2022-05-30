<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\surat\SuratKelahiranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Kelahirans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-kelahiran-index">
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
            'nama',
            'jenis_kelamin',
            'tanggal_lahir',
            //'berat',
            //'tinggi',
            //'tipe_kelahiran',
            //'kembar_ke',
            //'tempat_kelahiran',
            //'tempat_kelahiran_desa',
            //'penolong_kelahiran',
            //'nik_ayah',
            //'nama_ayah',
            //'tanggal_lahir_ayah',
            //'alamat_lengkap_ayah',
            //'kewarganegaraan_ayah',
            //'no_telp_ayah',
            //'nik_ibu',
            //'nama_ibu',
            //'tanggal_lahir_ibu',
            //'alamat_lengkap_ibu',
            //'kewarganegaraan_ibu',
            //'nama_pelapor',
            //'hubungan_pelapor',
            //'desa_pengantar',
            //'lampiran_kk',
            //'lampiran_surat_nikah',
            //'lampiran_surat_kelahiran',
            //'flag',
            // 'status',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'approval_date_kades',
            //'kades_id',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function($url, $model, $key) {
                        return Html::a('<i class = "fa-solid fa-print"></i>', Url::to(['/operator/surat-kelahiran/print', 'id' => $model->id]));
                    }
                ]
            ],
        ],
        ]); ?>
        </div>
    </div>

</div>

</div>
