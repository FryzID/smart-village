<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Penduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama_id')->textInput() ?>

    <?= $form->field($model, 'status_perkawinan')->dropDownList([ 'Belum Menikah' => 'Belum Menikah', 'Sudah Menikah' => 'Sudah Menikah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pekerjaan_id')->textInput() ?>

    <?= $form->field($model, 'pendidikan_id')->textInput() ?>

    <?= $form->field($model, 'rt_rw_id')->textInput() ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
