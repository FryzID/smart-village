<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Penduduk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penduduk-view">
<div class="col-lg-12 mx-auto py-3">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

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

        <div class="card-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nik',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama.nama',
            'status_perkawinan',
            'pekerjaan.nama',
            'pendidikan.nama',
            'rt_rw_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>
 </div>
    </div>
</div>

</div>
