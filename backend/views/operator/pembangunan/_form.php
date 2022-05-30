<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'nama_pembangunan')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'kategori_pembangunan_id')->dropDownList(
                arrayHelper::map(common\models\KategoriPembangunan::find()->asArray()->all(),'id', 'nama'), ['prompt' => 'Pilih Kategori'],) 
            ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'anggaran')->textInput() ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">            
            <?= $form->field($model, 'presentase')->textInput() ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'tgl_mulai')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan Tanggal Mulai'],
                'pluginOptions' => [
                    'autoclose'=> true,
                    'format' => 'yyyy-mm-dd'
                ],
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'tgl_selesai')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan Tanggal Selesai'],
                'pluginOptions' => [
                    'autoclose'=> true,
                    'format' => 'yyyy-mm-dd'
                ],
            ]) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'sumber_dana_pembangunan_id')->dropDownList(
                arrayHelper::map(common\models\SumberDanaPembangunan::find()->asArray()->all(),'id', 'nama'), ['prompt' => 'Pilih Sumber Dana'],) 
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'status_pembangunan_id')->dropDownList(
                arrayHelper::map(common\models\StatusPembangunan::find()->asArray()->all(),'id', 'nama'), ['prompt' => 'Pilih Status Pembangunan'],) 
            ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'mitra_id')->dropDownList(
                arrayHelper::map(common\models\Mitra::find()->asArray()->all(),'id', 'nama_mitra'), ['prompt' => 'Pilih Kategori'],) 
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'foto')->fileInput() ?>


    <!-- <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
