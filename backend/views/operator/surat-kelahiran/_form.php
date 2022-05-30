<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Penduduk;
use backend\models\surat\StatusSurat;
use backend\models\User;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\SuratKelahiran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-kelahiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Anak</h3>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'l' => 'L', 'p' => 'P'], ['prompt' => 'Pilih Jenis Kelamin']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'berat')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tinggi')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Tanggal Lahir'],
                        'pluginOptions' => [
                            'autoclose'=> true,
                            'format' => 'yyyy-mm-dd'
                        ],
                    ]) ?> 
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tempat_kelahiran')->textInput() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tipe_kelahiran')->textInput() ?>            
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'kembar_ke')->textInput() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tempat_kelahiran_desa')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'penolong_kelahiran')->textInput() ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Orang Tua</h3>

            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik_ayah')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(Penduduk::find()->asArray()->all(), 'id', 'nik'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Pilih NIK Penduduk'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ],) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'nik_ibu')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(Penduduk::find()->asArray()->all(), 'id', 'nik'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Pilih NIK Penduduk'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ],) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'kewarganegaraan_ayah')->dropDownList([ '0' => 'WNA', '1' => 'WNI'], ['prompt' => 'Pilih Kewarganegaraan']) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'kewarganegaraan_ibu')->dropDownList([ '0' => 'WNA', '1' => 'WNI'], ['prompt' => 'Pilih Kewarganegaraan']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'alamat_lengkap_ayah')->textarea(['rows' => 5]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'alamat_lengkap_ibu')->textarea(['rows' => 5]) ?>
                </div>
            </div>

            <?= $form->field($model, 'no_telp_ayah')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Pelapor</h3>

            <?= $form->field($model, 'nama_pelapor')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'hubungan_pelapor')->textInput(['maxlength' => true]) ?>

            <!-- <?= $form->field($model, 'desa_pengantar')->textInput(['maxlength' => true]) ?> -->
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
                'options' => ['placeholder' => 'Masukan Nama Kades'],
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

            <?= $form->field($model, 'lampiran_kk')->fileInput() ?>
        </div>
    </div>

    <div class="form-group text-center mt-4">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-block btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
