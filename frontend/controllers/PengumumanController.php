<?php

namespace frontend\controllers;

use frontend\models\Pengumuman;
use Yii;

class PengumumanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }

        $pengumuman = Pengumuman::find()->all();

        return $this->render('index', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }

        $model = Pengumuman::findOne(['id' => $id]);
        $pengumuman = Pengumuman::find()->where(['id' => $id])->all();

        return $this->render('view', [
            'pengumuman' => $pengumuman,
            'model' => $model,
        ]);
    }

}
