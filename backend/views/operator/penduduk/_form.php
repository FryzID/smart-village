<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use backend\models\Penduduk;
use backend\models\Agama;
use backend\models\Pekerjaan;
use backend\models\Pendidikan;
use backend\models\RtRw;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Penduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'nik')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Penduduk::find()->asArray()->all(), 'id', 'nik'),
                'language' => 'en',
                'options' => ['placeholder' => 'Pilih NIK Penduduk'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ],) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan Tanggal Lahir'],
                'pluginOptions' => [
                    'autoclose'=> true,
                    'format' => 'yyyy-mm-dd'
                ],
            ]) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => 'Pilih Jenis Kelamin']) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'agama_id')->dropDownList(
                ArrayHelper::map(Agama::find()->asArray()->all(), 'id', 'nama'), ['prompt' => 'Pilih Agama']
            ) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'status_perkawinan')->dropDownList([ 'Belum Menikah' => 'Belum Menikah', 'Sudah Menikah' => 'Sudah Menikah', ], ['prompt' => 'Pilih Status Perkawinan']) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'pekerjaan_id')->dropDownList(
                ArrayHelper::map(Pekerjaan::find()->asArray()->all(), 'id', 'nama'), ['prompt' => 'Pilih Pekerjaan']
            ) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'pendidikan_id')->dropDownList(
                ArrayHelper::map(Pendidikan::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Pilih Pendidikan']
            ) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'rt_rw_id')->dropDownList(
                ArrayHelper::map(RtRw::find()->asArray()->all(), 'id', 'rt_child'), ['prompt' => 'Pilih Rt']
            ) ?>
        </div>
    </div>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
