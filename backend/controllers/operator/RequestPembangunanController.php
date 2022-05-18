<?php

namespace backend\controllers\operator;

use backend\models\RequestPembangunan;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;

class RequestPembangunanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = RequestPembangunan::find()->all();
        if (Yii::$app->request->isPost) {
            return $this->render('index', ['data' => $data]);
        }else {
            return $this->render('index', ['data' => $data]);
        }
        
    }

    public function  actionVerifikasi($id) {
        $model = RequestPembangunan::find()->where(['id' => $id])->one();
        $data = RequestPembangunan::find()->all();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data berhasil diverifikasi');
                return $this->redirect('index');
            } else {
                Yii::$app->session->setFlash('danger', 'Terjadi kesalahan! Data gagal diverifikasi');  
            }
        }

        return $this->render('verifikasi', [
            'data' => $data,
            'model' => $model
        ]);
    }

    public function  actionDitolak($id) {
        $model = RequestPembangunan::find()->where(['id' => $id])->one();
        $data = RequestPembangunan::find()->all();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data berhasil diverifikasi');
                return $this->redirect('index');
            } else {
                Yii::$app->session->setFlash('danger', 'Terjadi kesalahan! Data gagal diverifikasi');  
            }
        }

        return $this->render('ditolak', [
            'data' => $data,
            'model' => $model
        ]);
    }
}