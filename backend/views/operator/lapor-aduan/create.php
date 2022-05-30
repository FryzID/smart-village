<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporAduan */

$this->title = 'Create Lapor Aduan';
$this->params['breadcrumbs'][] = ['label' => 'Lapor Aduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapor-aduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
