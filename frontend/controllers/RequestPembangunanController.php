<?php

namespace frontend\controllers;

use Yii;
use frontend\models\RequestPembangunan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RequestPembangunanController implements the CRUD actions for RequestPembangunan model.
 */
class RequestPembangunanController extends Controller
{
    /**
     * Creates a new RequestPembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionRequest()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }
        
        $model = new RequestPembangunan();
        $user = Yii::$app->user->id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->users_id = $user;
                $model->status = 'requestbaru';

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Data berhasil di tambahkan');   
                    return $this->redirect(['site/index', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('request', [
            'model' => $model,
        ]);
    }
}

