<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Create Request Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Request Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-pembangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
