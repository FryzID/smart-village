<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporAduan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapor-aduan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->dropDownList([ 'diverifikasi' => 'Diverifikasi', 'ditolak' => 'Ditolak', 'laporanbaru' => 'Laporanbaru', 'dipending' => 'Dipending', ], ['prompt' => 'Ganti Status']) ?>

    <!-- <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
