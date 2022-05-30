<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatusPembangunan */

$this->title = 'Create Status Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Status Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-pembangunan-create">
    <div class="col-lg-12 mx-auto py-3">
        <div class="card card-outline card-primary">
            <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

            <div class="card-body">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
