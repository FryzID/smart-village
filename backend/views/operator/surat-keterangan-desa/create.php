<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKeteranganDesa */

$this->title = 'Create Surat Keterangan Desa';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-desa-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
