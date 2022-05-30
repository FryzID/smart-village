<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratPengantarSkckSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-pengantar-skck-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat_lengkap') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'tujuan_pembuatan') ?>

    <?php // echo $form->field($model, 'lampiran_ktp') ?>

    <?php // echo $form->field($model, 'lampiran_kk') ?>

    <?php // echo $form->field($model, 'lampiran_akte_kelahiran') ?>

    <?php // echo $form->field($model, 'lampiran_pasfoto') ?>

    <?php // echo $form->field($model, 'desa_pengantar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'approval_date_kades') ?>

    <?php // echo $form->field($model, 'kades_id') ?>

    <?php // echo $form->field($model, 'approval_date_camat') ?>

    <?php // echo $form->field($model, 'camat_id') ?>

    <?php // echo $form->field($model, 'approval_date_kasipel') ?>

    <?php // echo $form->field($model, 'kasipel_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
