<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use backend\models\Dusun;

/* @var $this yii\web\View */
/* @var $model backend\models\RtRw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rt-rw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rw_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt_child')->textInput() ?>

    <?= $form->field($model, 'dusun_id')->dropDownList(
        ArrayHelper::map(Dusun::find()->asArray()->all(), 'id', 'nama_dusun')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
