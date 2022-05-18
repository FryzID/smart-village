<?php

namespace frontend\controllers;

use frontend\models\surat\SuratKeteranganMiskin;
use frontend\models\surat\SuratKeteranganDesa;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;
use kartik\mpdf\Pdf;

class DataSuratController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $user = Yii::$app->user->identity->id;
        $suratDesa = SuratKeteranganDesa::find()->where(['created_by' => $user])->all();
        $suratMiskin = SuratKeteranganMiskin::find()->where(['created_by' => $user])->all();

        return $this->render('index', [
            'suratDesa' => $suratDesa,
            'suratMiskin' => $suratMiskin,
        ]);
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
