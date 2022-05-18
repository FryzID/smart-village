<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PembangunanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembangunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_pembangunan') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'anggaran') ?>

    <?= $form->field($model, 'tgl_mulai') ?>

    <?php // echo $form->field($model, 'tgl_selesai') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'presentase') ?>

    <?php // echo $form->field($model, 'sumber_dana_pembangunan_id') ?>

    <?php // echo $form->field($model, 'kategori_pembangunan_id') ?>

    <?php // echo $form->field($model, 'status_pembangunan_id') ?>

    <?php // echo $form->field($model, 'users_id') ?>

    <?php // echo $form->field($model, 'mitra_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
