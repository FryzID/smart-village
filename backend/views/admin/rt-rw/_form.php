<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RtRw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rt-rw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rw_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt_child')->textInput() ?>

    <?= $form->field($model, 'dusun_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
