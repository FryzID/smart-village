<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratDomisiliPeroranganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-domisili-perorangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nik_alamat_lengkap') ?>

    <?= $form->field($model, 'nik_no_telp') ?>

    <?php // echo $form->field($model, 'desa_domisili') ?>

    <?php // echo $form->field($model, 'alamat_domisili') ?>

    <?php // echo $form->field($model, 'rt_domisili') ?>

    <?php // echo $form->field($model, 'rw_domisili') ?>

    <?php // echo $form->field($model, 'keperluan') ?>

    <?php // echo $form->field($model, 'lampiran_ktp') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'approval_date_kades') ?>

    <?php // echo $form->field($model, 'kades_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'desa_pengantar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
