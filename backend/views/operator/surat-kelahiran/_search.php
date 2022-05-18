<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKelahiranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-kelahiran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'berat') ?>

    <?php // echo $form->field($model, 'tinggi') ?>

    <?php // echo $form->field($model, 'tipe_kelahiran') ?>

    <?php // echo $form->field($model, 'kembar_ke') ?>

    <?php // echo $form->field($model, 'tempat_kelahiran') ?>

    <?php // echo $form->field($model, 'tempat_kelahiran_desa') ?>

    <?php // echo $form->field($model, 'penolong_kelahiran') ?>

    <?php // echo $form->field($model, 'nik_ayah') ?>

    <?php // echo $form->field($model, 'nama_ayah') ?>

    <?php // echo $form->field($model, 'tanggal_lahir_ayah') ?>

    <?php // echo $form->field($model, 'alamat_lengkap_ayah') ?>

    <?php // echo $form->field($model, 'kewarganegaraan_ayah') ?>

    <?php // echo $form->field($model, 'no_telp_ayah') ?>

    <?php // echo $form->field($model, 'nik_ibu') ?>

    <?php // echo $form->field($model, 'nama_ibu') ?>

    <?php // echo $form->field($model, 'tanggal_lahir_ibu') ?>

    <?php // echo $form->field($model, 'alamat_lengkap_ibu') ?>

    <?php // echo $form->field($model, 'kewarganegaraan_ibu') ?>

    <?php // echo $form->field($model, 'nama_pelapor') ?>

    <?php // echo $form->field($model, 'hubungan_pelapor') ?>

    <?php // echo $form->field($model, 'desa_pengantar') ?>

    <?php // echo $form->field($model, 'lampiran_kk') ?>

    <?php // echo $form->field($model, 'lampiran_surat_nikah') ?>

    <?php // echo $form->field($model, 'lampiran_surat_kelahiran') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'approval_date_kades') ?>

    <?php // echo $form->field($model, 'kades_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
