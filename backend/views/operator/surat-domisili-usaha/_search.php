<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratDomisiliUsahaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-domisili-usaha-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'badan_usaha') ?>

    <?= $form->field($model, 'bidang_usaha') ?>

    <?= $form->field($model, 'alamat_badan_usaha') ?>

    <?php // echo $form->field($model, 'nik_pemilik') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'maksud') ?>

    <?php // echo $form->field($model, 'lampiran_ktp') ?>

    <?php // echo $form->field($model, 'lampiran_dokumen_pendukung') ?>

    <?php // echo $form->field($model, 'lampiran_foto_usaha') ?>

    <?php // echo $form->field($model, 'lampiran_keterangan_rt_rw') ?>

    <?php // echo $form->field($model, 'lampiran_surat_peryataan') ?>

    <?php // echo $form->field($model, 'desa_pengantar') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'approval_date_kades') ?>

    <?php // echo $form->field($model, 'kades_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
