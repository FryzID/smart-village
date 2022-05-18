<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\surat\SuratKeteranganMiskinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Keterangan Miskins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-miskin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keterangan Miskin', ['create'], ['class' => 'btn btn-success']) ?>
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
            'no_telp',
            'keterangan:ntext',
            //'surat_pernyataan_miskin',
            //'desa_pengantar',
            //'lampiran_ktp',
            //'lampiran_kk',
            //'status',
            //'flag',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'approval_date_kades',
            //'kades_id',
            //'approval_date_camat',
            //'camat_id',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
