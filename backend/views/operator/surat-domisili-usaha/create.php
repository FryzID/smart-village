<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\surat\SuratDomisiliUsaha */

$this->title = 'Create Surat Domisili Usaha';
$this->params['breadcrumbs'][] = ['label' => 'Surat Domisili Usahas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-domisili-usaha-create">
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
