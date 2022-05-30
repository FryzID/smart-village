<?php

namespace frontend\controllers;

use Yii;
use common\models\Pembangunan;
use common\models\User;
use frontend\models\LaporAduan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ListPembangunanController implements the CRUD actions for Pembangunan model.
 */
class ListPembangunanController extends Controller
{
    /**
     * Lists all Pembangunan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }

        $kegiatan = Pembangunan::find()->all();

        return $this->render('index', [
            'kegiatan' => $kegiatan
        ]);
    }

    public function actionLapor($id)
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }

        $model = new LaporAduan();
        $user = Yii::$app->user->id;
        $bangun = Pembangunan::findOne($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->users_id = $user;
                $model->pembangunan_id = $bangun->id;
                $model->status = 'laporanbaru';

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'foto');

                if($model->validate()) {
                    
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@frontend/web/gambar/lapor-aduan/') . $nama . '.' . $foto->extension);
                        $model->foto = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                }

                if($model->save()) {
                    Yii::$app->session->setFlash('success', 'Data berhasil di tambahkan');
                    return $this->redirect(['/site/index']);
                }else {
                    Yii::$app->session->setFlash('error', 'Data gagal di tambahkan');
                }
            }
        }

        return $this->render('lapor', [
            'model' => $model,
        ]);
    }
}
