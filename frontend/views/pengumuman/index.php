<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'List Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12 mx-auto py-3">
    <?php foreach ($pengumuman as $item) { ?>
    <div class="card card-outline card-secondary mb-5">
        <div class="card-body">
            <h3>Perihal : <?= $item->perihal ?></h3>

            <div class="my-3">
                <a href="<?= Url::toRoute(['pengumuman/view', 'id' => $item->id]) ?>" class="btn btn-secondary col-sm-12">Lihat Detil</a>
            </div>
        </div>
    </div>

    <?php } ?>
</div>
