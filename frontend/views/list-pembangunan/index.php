<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Kegiatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama_pembangunan',
            'foto',
            'anggaran',
            'tgl_mulai',
            //'tgl_selesai',
            //'longitude',
            //'latitude',
            //'keterangan',
            //'sumber_dana_pembangunan_id',
            //'kategori_pembangunan_id',
            //'status_pembangunan_id',
            //'users_id',
            //'mitra_id',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'template' => '{index} {view}',
            ],
        ],
    ]); ?> -->

    <div class="card">
        <div class="card-body">
            <?php foreach ($kegiatan as $list) { ?>
                <h3>Nama Kegiatan : <?= $list->nama_pembangunan?></h3>
                <div class="my-3">
                    <!-- <?= Html::a('Laporkan Masalah', ['lapor'], ['class' => 'btn btn-primary col-sm-12']); ?> -->
                    <a href="<?= Url::toRoute(['list-pembangunan/lapor', 'id' => $list->id]) ?>" class="btn btn-primary col-sm-12">Laporkan Masalah</a>
                </div>
            <?php } ?>
        </div>
    </div>


</div>
