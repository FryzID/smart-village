<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\surat\SuratKeteranganMiskin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-miskin-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Surat Keterangan Miskin</h3>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
                </div>
            </div>


            <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="card mt-5 mb-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Lampiran Surat-Surat</h3>

            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'surat_pernyataan_miskin')->fileInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'lampiran_ktp')->fileInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'lampiran_kk')->fileInput() ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <?= $form->field($model, 'desa_pengantar')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
