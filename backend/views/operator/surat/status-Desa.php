<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($suratDesaModel, 'status')->dropDownList(
        arrayHelper::map(frontend\models\surat\StatusSurat::find()->all(),'id', 'nama',)) 
    ?>

    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>
