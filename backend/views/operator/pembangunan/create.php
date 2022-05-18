<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */

$this->title = 'Create Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
