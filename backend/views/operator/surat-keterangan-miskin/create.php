<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKeteranganMiskin */

$this->title = 'Create Surat Keterangan Miskin';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Miskins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-miskin-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
