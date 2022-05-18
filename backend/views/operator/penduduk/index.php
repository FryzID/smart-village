<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PendudukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penduduks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penduduk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penduduk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nik',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            //'jenis_kelamin',
            //'agama_id',
            //'status_perkawinan',
            //'pekerjaan_id',
            //'pendidikan_id',
            //'rt_rw_id',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
