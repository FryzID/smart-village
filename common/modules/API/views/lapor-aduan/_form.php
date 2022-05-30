<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapor-aduan-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'diverifikasi' => 'Diverifikasi', 'ditolak' => 'Ditolak', 'dipending' => 'Dipending', 'laporanbaru' => 'Laporanbaru', ], ['prompt' => '']) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
