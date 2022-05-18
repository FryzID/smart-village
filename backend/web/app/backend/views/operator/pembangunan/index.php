<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama_pembangunan',
            'foto',
            'anggaran',
            'tgl_mulai',
            //'tgl_selesai',
            //'longitude',
            //'latitude',
            //'keterangan',
            //'presentase',
            //'sumber_dana_pembangunan_id',
            //'kategori_pembangunan_id',
            //'status_pembangunan_id',
            //'users_id',
            //'mitra_id',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pembangunan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
