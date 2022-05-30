<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>

    <?php $form = ActiveForm::begin(
        [
            'id' => 'form-signup',
            'options' => [
                  'style' => 'margin: 200px; width: 50%'
            ] 
        ]
    ); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="row justify-content-center">
            <?= Html::submitButton('Signup', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>