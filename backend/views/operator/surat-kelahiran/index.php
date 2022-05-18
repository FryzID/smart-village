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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Kelahiran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'approval_date_kades',
            //'kades_id',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
