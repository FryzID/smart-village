<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Verifikasi Data';
$this->params['breadcrumbs'][] = ['label' => 'Data Request Pembangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'statu')->dropDownList(
        arrayHelper::map(backend\models\RequestPembangunan::find()->all(),'statu', 'statu'), ['prompt' => $model->statu],) 
    ?>

    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>
