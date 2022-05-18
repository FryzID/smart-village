<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pembangunan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggaran')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_selesai')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumber_dana_pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'kategori_pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'status_pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'mitra_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
