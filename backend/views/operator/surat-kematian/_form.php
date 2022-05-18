<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SuratKematian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-kematian-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card my-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Almarhum / Almarhumah</h3>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'kewarganegaraan')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'status_pernikahan')->textInput() ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'pekerjaan_id')->dropDownList(
                        arrayHelper::map(common\models\Pekerjaan::find()->all(),'id', 'nama',),['prompt' => 'Pilih Pekerjaan'],) 
                    ?>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'agama_id')->dropDownList(
                        arrayHelper::map(common\models\Agama::find()->all(),'id', 'nama',),['prompt' => 'Pilih Agama'],) 
                    ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tempat_meninggal')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'sebab_meninggal')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tanggal_meninggal')->textInput() ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'umur_meninggal')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'alamat_lengkap')->textArea(['rows' => 3]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'penentu_meninggal')->textInput() ?>
                </div>
            </div>
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
    
    <div class="card mt-5 mb-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Lampiran Surat-Surat</h3>

            <?= $form->field($model, 'lampiran_kk')->fileInput() ?>
        </div>
    </div>

    <div class="form-group text-center">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-block btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
