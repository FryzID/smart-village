<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AgamaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agama';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agama-index">
<div class="col-lg-12 mx-auto py-3">

    <div class="card card-outline card-primary">
        <h1 class="d-flex justify-content-center mb-2"><?= Html::encode($this->title) ?></h1>

        <div class="mt-3 ml-3">
            <?= Html::a('<i class="fas fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-primary']) ?>
        </div>
        
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'nama',
                    [
                        'class' => ActionColumn::className(),
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
</div>
