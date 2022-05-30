<?php

use backend\models\Roles;
use backend\models\Penduduk;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'roles_id')->dropDownList(
                ArrayHelper::map(Roles::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Pilih Role']
            ) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'penduduk_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Penduduk::find()->asArray()->all(), 'id', 'nik'),
                'language' => 'en',
                'options' => ['placeholder' => 'Pilih NIK'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ],) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'photo')->fileInput() ?>

        <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?>



        <?= $form->field($model, 'last_login')->textInput() ?>


        <?= $form->field($model, 'created_at')->textInput() ?>

        <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
