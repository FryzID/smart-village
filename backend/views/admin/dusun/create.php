<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dusun */

$this->title = 'Create Dusun';
$this->params['breadcrumbs'][] = ['label' => 'Dusun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dusun-create">
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
