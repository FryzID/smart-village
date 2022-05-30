<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RequestPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'statu')->dropDownList([ 'terverifikasi' => 'Terverifikasi', 'requestbaru' => 'Requestbaru', 'ditindaklanjuti' => 'Ditindaklanjuti'], ['prompt' => 'Ganti Status']) ?>

    <!-- <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'kategori_pembangunan_id')->textInput() ?>


    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
