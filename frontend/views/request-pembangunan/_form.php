<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\arrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($alamatModel, 'rt_child')->dropDownList(
                arrayHelper::map(common\models\RtRw::find()->all(),'rt_child', 'rt_child',),['prompt' => 'Pilih Rt'],)  
            ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($alamatModel, 'rw_parent')->dropDownList(
                arrayHelper::map(common\models\RtRw::find()->all(),'rw_parent', 'rw_parent',),['prompt' => 'Pilih Rw'],)  
            ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($dusun, 'nama_dusun')->dropDownList(
                arrayHelper::map(common\models\Dusun::find()->all(),'nama_dusun', 'nama_dusun',),['prompt' => 'Pilih Dusun'],)  
            ?>
        </div>
    </div>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kategori_pembangunan_id')->dropDownList(
        arrayHelper::map(common\models\KategoriPembangunan::find()->all(),'id', 'nama',),['prompt' => 'Pilih Kategori'],) 
    ?>

    <!-- <?= $form->field($model, 'users_id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'statu')->dropDownList([ 'terverifikasi' => 'Terverifikasi', 'ditindaklanjuti' => 'Ditindaklanjuti', 'requestbaru' => 'Requestbaru', '' => '', ], ['prompt' => '']) ?> -->

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
