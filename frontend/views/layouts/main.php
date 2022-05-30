<?php

/** @var \yii\web\View $this */
/** @var string $content */

use app\assets\AdminLteAsset;
use common\widgets\Alert;
use common\models\User;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

<?php 
        $this->beginContent('@app/views/layouts/page/header.php');
        $this->endContent();
    ?>
    <!-- /.navbar -->


    <!-- Sidebar -->
    <?php 
        $this->beginContent('@app/views/layouts/page/left.php');
        $this->endContent();
    ?>
    <!-- /.sidebar -->

    <!-- Content -->
    <?= $this->render(
        '@app/views/layouts/page/content.php',
        [
            'content' => $content,
        ]
    ) ?>
    <!-- /.content -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

