<?php

use backend\models\Penduduk;
use backend\models\surat\StatusSurat;
use backend\models\User;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratDomisiliPerorangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-domisili-perorangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Penduduk</h3>

            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(Penduduk::find()->asArray()->all(), 'id', 'nik'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Pilih NIK Penduduk'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ],) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik_no_telp')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <?= $form->field($model, 'nik_alamat_lengkap')->textarea(['rows' => 5]) ?>
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Domisili Penduduk</h3>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'desa_domisili')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'rt_domisili')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'rw_domisili')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            
            <?= $form->field($model, 'alamat_domisili')->textarea(['rows' => 5]) ?>
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Keterangan Data Diterima</h3>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'approval_date_kades')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Tanggal Diterima'],
                        'pluginOptions' => [
                            'autoclose'=> true,
                            'format' => 'yyyy-mm-dd'
                        ],
                    ]) ?> 
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'kades_id')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(User::find()->where(['roles_id' => 2])->all(), 'id', 'name'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Masukan Nama Kades'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ],) ?>
                </div>
            </div>
            
            <?= $form->field($model, 'status')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(StatusSurat::find()->all(), 'id', 'nama'),
                'language' => 'en',
                'options' => ['placeholder' => 'Masukan Status Surat'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ],) ?>

            <?= $form->field($model, 'no_surat')->textInput() ?>
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Lampiran Surat-Surat</h3>

            <?= $form->field($model, 'lampiran_ktp')->fileInput() ?>
        </div>
    </div>

    <!-- <?= $form->field($model, 'flag')->textInput() ?>

    <?= $form->field($model, 'desa_pengantar')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



