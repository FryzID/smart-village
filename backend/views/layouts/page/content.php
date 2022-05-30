<?php
use yii\bootstrap4\Breadcrumbs;
use common\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<div class="content-wrapper">
    <div class="content-header">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>