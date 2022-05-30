<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RequestPembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Pembangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-pembangunan-index">
<div class="col-lg-12 mx-auto py-3">

    <div class="card card-outline card-primary">
        <h1 class="d-flex justify-content-center mb-2"><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul',
            'deskripsi:ntext',
            'users_id',
            'kategori_pembangunan_id',
            //'statu',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete} {view}',
            ],
        ],
    ]); ?>
    </div>
</div>

</div>
