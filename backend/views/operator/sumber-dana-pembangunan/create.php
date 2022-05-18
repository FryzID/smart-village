<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SumberDanaPembangunan */

$this->title = 'Create Sumber Dana Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Sumber Dana Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumber-dana-pembangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
