<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SuratKeteranganDesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-desa-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Surat Keterangan Desa</h3>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'judul_surat')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="card mt-5 mb-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Lampiran Surat-Surat</h3>

            <?= $form->field($model, 'lampiran_ktp')->fileInput() ?>
        </div>
    </div>

    <!-- <?= $form->field($model, 'desa_pengantar')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group mt-5 text-center">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-block btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
