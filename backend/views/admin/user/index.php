<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
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
                'roles_id',
                'name',
                'username',
                // 'password',
                //'auth_key',
                //'password_reset_token',
                //'access_token',
                //'email:email',
                //'photo',
                //'last_login',
                //'penduduk_id',
                //'created_at',
                //'updated_at',
                [
                    'class' => ActionColumn::className(),
                ],
            ],
        ]); ?>
        </div>
    </div>
</div>

</div>
