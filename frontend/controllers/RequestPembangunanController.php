<?php

namespace frontend\controllers;

use Yii;
use frontend\models\RequestPembangunan;
use frontend\models\RtRw;
use common\models\dusun;
use frontend\models\RequestPembangunanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RequestPembangunanController implements the CRUD actions for RequestPembangunan model.
 */
class RequestPembangunanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    // /**
    //  * Lists all RequestPembangunan models.
    //  *
    //  * @return string
    //  */
    // public function actionIndex()
    // {
    //     $searchModel = new RequestPembangunanSearch();
    //     $dataProvider = $searchModel->search($this->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    // /**
    //  * Displays a single RequestPembangunan model.
    //  * @param int $id ID
    //  * @return string
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }

    /**
     * Creates a new RequestPembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RequestPembangunan();
        $alamatModel = new RtRw();
        $dusun = new Dusun();
        $user = Yii::$app->user->id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $alamatModel->load($this->request->post()) && $dusun->load($this->request->post())) {
                $model->users_id = $user;
                $model->deskripsi = $model->deskripsi . ', Alamat : ' . 'Dusun : ' . $dusun->nama_dusun . ', RT : ' . $alamatModel->rt_child . ' RW : ' . $alamatModel->rw_parent;
                $model->statu = 'requestbaru';

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Data berhasil di tambahkan');   
                    return $this->redirect(['site/index', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'alamatModel' => $alamatModel,
            'dusun' => $dusun
        ]);
    }

    // /**
    //  * Updates an existing RequestPembangunan model.
    //  * If update is successful, the browser will be redirected to the 'view' page.
    //  * @param int $id ID
    //  * @return string|\yii\web\Response
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Deletes an existing RequestPembangunan model.
    //  * If deletion is successful, the browser will be redirected to the 'index' page.
    //  * @param int $id ID
    //  * @return \yii\web\Response
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    // /**
    //  * Finds the RequestPembangunan model based on its primary key value.
    //  * If the model is not found, a 404 HTTP exception will be thrown.
    //  * @param int $id ID
    //  * @return RequestPembangunan the loaded model
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // protected function findModel($id)
    // {
    //     if (($model = RequestPembangunan::findOne(['id' => $id])) !== null) {
    //         return $model;
    //     }

    //     throw new NotFoundHttpException('The requested page does not exist.');
    // }
}
