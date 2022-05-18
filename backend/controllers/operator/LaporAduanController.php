<?php

namespace backend\controllers\operator;

use backend\models\LaporAduan;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;

class LaporAduanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = LaporAduan::find()->all();

        if (Yii::$app->request->isPost) {
            return $this->render('index', ['data' => $data]);
        }else {
            return $this->render('index', ['data' => $data]);
        }
        
    }

    public function  actionVerifikasi($id) {
        $model = LaporAduan::find()->where(['id' => $id])->one();
        $data = LaporAduan::find()->all();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data berhasil diverifikasi');
            } else {
                Yii::$app->session->setFlash('danger', 'Terjadi kesalahan! Data gagal diverifikasi');  
            }
        }

        return $this->renderAjax('verifikasi', [
            'data' => $data,
            'model' => $model
        ]);
    }

}
