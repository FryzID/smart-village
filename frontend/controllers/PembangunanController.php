<?php

namespace frontend\controllers;

use Yii;
use common\models\Pembangunan;

class PembangunanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }

        $pembangunan = Pembangunan::find()->all();

        return $this->render('index', [
            'pembangunan' => $pembangunan
        ]);
    }

}
