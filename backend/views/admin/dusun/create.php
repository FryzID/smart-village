<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dusun */

$this->title = 'Create Dusun';
$this->params['breadcrumbs'][] = ['label' => 'Dusuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dusun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
