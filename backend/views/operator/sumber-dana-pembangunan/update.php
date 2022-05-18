<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SumberDanaPembangunan */

$this->title = 'Update Sumber Dana Pembangunan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sumber Dana Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sumber-dana-pembangunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
