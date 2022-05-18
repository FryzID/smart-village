<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

?>
<div class="modal fade" id="verifikasi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Status : </h1>
            </div>
            <div class="modal-body">
                <?php $form = ActiveForm::begin(['id' => 'update-form']); ?>

                <?= $form->field($model, 'status', ['wrapperOptions' => ['style' => 'display: inline block']])->inline(true)->radioList(
                    array(0 => 'dipending', 1 => 'ditolak', 2 => 'diverifikasi'))
                ?>

                <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

