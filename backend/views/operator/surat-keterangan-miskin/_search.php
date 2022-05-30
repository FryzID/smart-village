<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKeteranganMiskinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-miskin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'nik_id') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'surat_pernyataan_miskin') ?>

    <?php // echo $form->field($model, 'desa_pengantar') ?>

    <?php // echo $form->field($model, 'lampiran_ktp') ?>

    <?php // echo $form->field($model, 'lampiran_kk') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'approval_date_kades') ?>

    <?php // echo $form->field($model, 'kades_id') ?>

    <?php // echo $form->field($model, 'approval_date_camat') ?>

    <?php // echo $form->field($model, 'camat_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
