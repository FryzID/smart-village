<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">
<div class="col-lg-12 mx-auto py-3">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>
        <!-- <?php foreach ($data as $media) { ?>
            <img src="<?php echo Yii::getAlias('@frontend') . 'web/gambar/profile/'. $media->photo ?>" class="card-mg-top">
        <?php } ?> -->

        <?= Html::img('@frontend/web/gambar/profile/' . $model->photo, ['class' => 'mx-5', 'width' => '800px']) ?>

        <div class="card-body">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'username',
                [
                    'label' => 'Role',
                    'attribute' => 'roles.nama'
                ],
                // 'password',
                'auth_key',
                // 'password_reset_token',
                'access_token',
                'email:email',
                'photo',
                'last_login',
                'penduduk.nik',
                'created_at',
                'updated_at',
            ],
        ]) ?>
         </div>
        
        <div style="margin-left: 20px">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
    </div>
</div>


</div>
