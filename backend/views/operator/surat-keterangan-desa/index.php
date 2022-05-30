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
<div class="col-lg-12 mx-auto py-3">

    <div class="card card-outline card-primary">
        <h1 class="d-flex justify-content-center mb-2"><?= Html::encode($this->title) ?></h1>

        <div class="mt-3 ml-3">
            <?= Html::a('<i class="fas fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-primary']) ?>
        </div>
        
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul_surat',
            'no_surat',
            'kades_id',
            // 'nik_id',
            'dataPenduduk.nik',
            //'no_telp',
            //'keterangan:ntext',
            //'keperluan',
            //'lampiran_ktp',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            // 'status',
            // 'status1.nama',
            [
                'label' => 'Status Surat',
                'attribute' => 'status1.nama',
            ],
            //'flag',
            //'desa_pengantar',
            //'approval_date_kades',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function($url, $model, $key) {
                        return Html::a('<i class = "fa-solid fa-print"></i>', Url::to(['/operator/surat-keterangan-desa/print', 'id' => $model->id]));
                    }
                ]
            ],
        ],
    ]); ?>
 </div>
    </div>

</div>
</div>
