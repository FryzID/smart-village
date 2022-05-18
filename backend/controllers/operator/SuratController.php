<?php

namespace backend\controllers\operator;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Exception;
use yii\helpers\Url;
use kartik\mpdf\Pdf;

class SuratController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $suratMiskin = \frontend\models\surat\SuratKeteranganMiskin::find()->all();
        $suratDesa = \frontend\models\surat\SuratKeteranganDesa::find()->all();

        return $this->render('index', [
            'suratMiskin' => $suratMiskin,
            'suratDesa' => $suratDesa
        ]);
    }

    public function actionVerifikasiStatus($id)
    {
        $suratDesa = \frontend\models\surat\SuratKeteranganDesa::find()->where(['id' => $id])->all();
        $suratDesaModel = \frontend\models\surat\SuratKeteranganDesa::find()->where(['id' => $id])->one();
        $suratMiskin = \frontend\models\surat\SuratKeteranganMiskin::find()->where(['id' => $id])->all();
        $suratMiskinModel = \frontend\models\surat\SuratKeteranganMiskin::find()->where(['id' => $id])->one();

        if ($suratMiskin == true) {
            return $this->render('status-miskin', [
                'suratMiskin' => $suratMiskin,
                'suratMiskinModel' => $suratMiskinModel
            ]);
        }  elseif ($suratDesa == true) {
            return $this->render('status-desa', [
                'suratDesa' => $suratDesa,
                'suratDesaModel' => $suratDesaModel
            ]);
        }
    }

    public function actionShowData($id)
    {
        $modelDesa = \frontend\models\surat\SuratKeteranganDesa::find()->all();
        $dataDesa = \frontend\models\surat\SuratKeteranganDesa::findOne(['id' => $id]);
        $modelMiskin = \frontend\models\surat\SuratKeteranganMiskin::find()->all();
        $dataMiskin = \frontend\models\surat\SuratKeteranganMiskin::findOne(['id' => $id]);

        if ($dataMiskin == true) {
            return $this->render('show-miskin', [
                'modelMiskin' => $modelMiskin,
                'dataMiskin' => $dataMiskin,
            ]);
        }  elseif ($dataDesa == true) {
            return $this->render('show-desa', [
                'modelDesa' => $modelDesa,
                'dataDesa' => $dataDesa,
            ]);
        }

    }

    public function actionPrintData($id)
    {
        $modelDesa = \frontend\models\surat\SuratKeteranganDesa::find()->all();
        $dataDesa = \frontend\models\surat\SuratKeteranganDesa::findOne(['id' => $id]);
        $modelMiskin = \frontend\models\surat\SuratKeteranganMiskin::find()->all();
        $dataMiskin = \frontend\models\surat\SuratKeteranganMiskin::findOne(['id' => $id]);
        

        if ($dataMiskin == true) {
            $content = $this->renderPartial('print\print-miskin', [
                'dataMiskin' => $dataMiskin,
                'modelMiskin' => $modelMiskin,
            ]);

            $pdf = new Pdf ([
                'mode' => Pdf::MODE_CORE,
                'format' => Pdf::FORMAT_A4,
                'destination' => Pdf::DEST_BROWSER,
                'content' => $content,
                'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
                'cssInline' => '.kv-heading-1{font-size:18px}',
                'options' => ['title' => 'Krajee Report Title'],
                'methods' => [
                    'setTitle' => ['Print Surat Keterangan Miskin '. $dataMiskin->id],
                    // 'setHeader' => ['Kop Surat']
                ]
            ]);   
        } elseif ($dataDesa == true) {
            $content = $this->renderPartial('print\print-desa', [
                'dataDesa' => $dataDesa,
                'modelDesa' => $modelDesa,
            ]);

            $pdf = new Pdf ([
                'mode' => Pdf::MODE_CORE,
                'format' => Pdf::FORMAT_A4,
                'destination' => Pdf::DEST_BROWSER,
                'content' => $content,
                'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
                'cssInline' => '.kv-heading-1{font-size:18px}',
                'options' => ['title' => 'Krajee Report Title'],
                'methods' => [
                    'setTitle' => ['Print Surat Keterangan Desa '. $dataDesa->id],
                    // 'setHeader' => ['Kop Surat']
                ]
            ]);   
        }

        return $pdf->render();
    }
}
