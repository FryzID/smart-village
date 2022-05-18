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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Kematian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'no_surat',
            'nik',
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
            //'status',
            //'created_at',
            //'upated_at',
            //'created_by',
            //'updated_by',
            //'desa_pengantar',
            //'approval_date_kades',
            //'kades_id',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
