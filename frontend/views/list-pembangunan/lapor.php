<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Laporkan Masalah';
$this->params['breadcrumbs'][] = ['label' => 'Kegiatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapor-aduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'diverifikasi' => 'Diverifikasi', 'ditolak' => 'Ditolak', 'dipending' => 'Dipending', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
