<?php

namespace frontend\controllers;

use backend\models\Pembangunan;

class PembangunanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $pembangunan = Pembangunan::find()->all();

        return $this->render('index', [
            'pembangunan' => $pembangunan
        ]);
    }

}
