<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Mitra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mitra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_mitra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'users_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(User::find()->where(['roles_id' => 8])->all(), 'id', 'name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Masukan Nama Mitra'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ],) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
