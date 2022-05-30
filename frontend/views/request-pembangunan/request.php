<?php

use common\models\KategoriPembangunan;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Request Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-create">

<div class="col-lg-12 mx-auto py-3">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

        <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'judul')->textInput() ?>

            <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'kategori_pembangunan_id')->dropDownList(
                ArrayHelper::map(KategoriPembangunan::find()->asArray()->all(), 'id', 'nama'), ['prompt' => 'Pilih Kategori Kegiatan']
            ) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
            </div>

        <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

</div>
