<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dusun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dusun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dusun')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
