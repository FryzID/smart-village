<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Request Kegiatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-pembangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'alamatModel' => $alamatModel,
        'dusun' => $dusun
    ]) ?>

</div>
