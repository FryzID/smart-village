<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SumberDanaPembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sumber Dana Pembangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumber-dana-pembangunan-index">
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

            // 'id',
            'nama',
            // 'created_at',
            // 'updated_at',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>
    </div>
    </div>

</div>


</div>
