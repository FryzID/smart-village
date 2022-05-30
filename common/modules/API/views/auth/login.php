<?php 

use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin([
    'options' => [
        'style' => 'margin: 200px; width: 50%'
    ] 
]); ?>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox() ?>

    <input type="submit" name="login">

<?php ActiveForm::end(); ?>
