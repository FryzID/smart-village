<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratKematian */

$this->title = 'Create Surat Kematian';
$this->params['breadcrumbs'][] = ['label' => 'Surat Kematians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-kematian-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
