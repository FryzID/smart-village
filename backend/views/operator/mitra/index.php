<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MitraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mitras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mitra-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mitra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama_mitra',
            'alamat:ntext',
            'no_telp',
            'email:email',
            //'users_id',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
