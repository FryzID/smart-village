<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RtRwSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rt Rws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-rw-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rt Rw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'rw_parent',
            'rt_child',
            'dusun_id',
            [
                'class' => ActionColumn::className(),
                
            ],
        ],
    ]); ?>


</div>
