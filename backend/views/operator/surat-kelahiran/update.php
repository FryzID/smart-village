<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKelahiran */

$this->title = 'Update Surat Kelahiran: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Kelahirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-kelahiran-update">
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
