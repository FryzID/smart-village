<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengumuman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengumuman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tgl_pengumuman')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukkan Tanggal Pengumuman'],
        'pluginOptions' => [
            'autoclose'=> true,
            'format' => 'yyyy-mm-dd'
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
