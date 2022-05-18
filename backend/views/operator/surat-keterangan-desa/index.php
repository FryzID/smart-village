<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\surat\SuratKeteranganDesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Keterangan Desas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-desa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keterangan Desa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul_surat',
            'no_surat',
            'kades_id',
            'nik',
            //'no_telp',
            //'keterangan:ntext',
            //'keperluan',
            //'lampiran_ktp',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'status',
            //'flag',
            //'desa_pengantar',
            //'approval_date_kades',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
