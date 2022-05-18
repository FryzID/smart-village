<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKematianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-kematian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat_lengkap') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'status_pernikahan') ?>

    <?php // echo $form->field($model, 'pekerjaan_id') ?>

    <?php // echo $form->field($model, 'agama_id') ?>

    <?php // echo $form->field($model, 'kewarganegaraan') ?>

    <?php // echo $form->field($model, 'tanggal_meninggal') ?>

    <?php // echo $form->field($model, 'umur_meninggal') ?>

    <?php // echo $form->field($model, 'tempat_meninggal') ?>

    <?php // echo $form->field($model, 'sebab_meninggal') ?>

    <?php // echo $form->field($model, 'penentu_meninggal') ?>

    <?php // echo $form->field($model, 'nama_pelapor') ?>

    <?php // echo $form->field($model, 'hubungan_pelapor') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'lampiran_kk') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'upated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'desa_pengantar') ?>

    <?php // echo $form->field($model, 'approval_date_kades') ?>

    <?php // echo $form->field($model, 'kades_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
