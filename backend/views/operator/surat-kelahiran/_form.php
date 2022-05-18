<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SuratKelahiran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-kelahiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Anak</h3>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'berat')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tinggi')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tempat_kelahiran')->textInput() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tipe_kelahiran')->textInput() ?>            
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'kembar_ke')->textInput() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tempat_kelahiran_desa')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'penolong_kelahiran')->textInput() ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Orang Tua</h3>

            <div class="row mt-5">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'nik_ayah')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'nik_ibu')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'kewarganegaraan_ayah')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'tanggal_lahir_ayah')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'kewarganegaraan_ibu')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <?= $form->field($model, 'tanggal_lahir_ayah')->textInput() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'alamat_lengkap_ayah')->textarea(['rows' => 5]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'alamat_lengkap_ibu')->textarea(['rows' => 5]) ?>
                </div>
            </div>

            <?= $form->field($model, 'no_telp_ayah')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Pelapor</h3>

            <?= $form->field($model, 'nama_pelapor')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'hubungan_pelapor')->textInput(['maxlength' => true]) ?>

            <!-- <?= $form->field($model, 'desa_pengantar')->textInput(['maxlength' => true]) ?> -->
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Lampiran Surat-Surat</h3>

            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'lampiran_kk')->fileInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'lampiran_surat_nikah')->fileInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'lampiran_surat_kelahiran')->fileInput() ?>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group text-center mt-4">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-block btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
