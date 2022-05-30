<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
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
            //'prosentase',
            //'sumber_dana_pembangunan_id',
            //'kategori_pembangunan_id',
            //'status_pembangunan_id',
            //'user_id',
            //'mitra_id',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
