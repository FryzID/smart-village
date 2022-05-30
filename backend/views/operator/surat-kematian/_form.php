<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Penduduk;
use backend\models\surat\StatusSurat;
use backend\models\User;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\SuratKematian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-kematian-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card my-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Almarhum / Almarhumah</h3>

            <div class="row"> 
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
                    <?= $form->field($model, 'kewarganegaraan')->dropDownList([ '0' => 'WNA', '1' => 'WNI'], ['prompt' => 'Pilih Kewarganegaraan']) ?>
                </div>
            </div>


            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tempat_meninggal')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'sebab_meninggal')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row"> 
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'tanggal_meninggal')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Tanggal Meninggal'],
                        'pluginOptions' => [
                            'autoclose'=> true,
                            'format' => 'yyyy-mm-dd'
                        ],
                    ]) ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= $form->field($model, 'umur_meninggal')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <?= $form->field($model, 'alamat_lengkap')->textArea(['rows' => 3]) ?>
        </div>
    </div>

    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Pelapor</h3>

            <?= $form->field($model, 'nama_pelapor')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'hubungan_pelapor')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <div class="card mt-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Data Diterima Kades</h3>

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
    
    <div class="card mt-5 mb-5" style="border-radius: 10px">
        <div class="card-body">
            <h3 class="text-center mb-5">Lampiran Surat-Surat</h3>

            <?= $form->field($model, 'lampiran_kk')->fileInput() ?>
        </div>
    </div>

    <div class="form-group text-center">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-block btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
