<?php

namespace frontend\controllers;

use Yii;
use common\models\Pembangunan;
use common\models\User;
use frontend\models\LaporAduan;
use frontend\models\ListPembangunanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ListPembangunanController implements the CRUD actions for Pembangunan model.
 */
class ListPembangunanController extends Controller
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

    /**
     * Lists all Pembangunan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ListPembangunanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $kegiatan = Pembangunan::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Displays a single Pembangunan model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    // /**
    //  * Creates a new Pembangunan model.
    //  * If creation is successful, the browser will be redirected to the 'view' page.
    //  * @return string|\yii\web\Response
    //  */
    // public function actionCreate()
    // {
    //     $model = new Pembangunan();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id' => $model->id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Updates an existing Pembangunan model.
    //  * If update is successful, the browser will be redirected to the 'view' page.
    //  * @param int $id ID
    //  * @return string|\yii\web\Response
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['site/index', 'id' => $model->id]);
    //     }

    //     return $this->render('lapor', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Deletes an existing Pembangunan model.
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

    /**
     * Finds the Pembangunan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Pembangunan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LaporAduan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionLapor($id)
    {
        $model = new LaporAduan();
        $user = Yii::$app->user->id;
        $bangun = Pembangunan::findOne($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                    $model->users_id = $user;
                    $model->pembangunan_id = $bangun->id;
                    $model->foto = '';
                    $model->status = 'laporanbaru';
            
                if($model->save()) {
                    Yii::$app->session->setFlash('success', 'Data berhasil di tambahkan');
                    return $this->redirect(['index', 'id' => $model->id]);
                }else {
                    Yii::$app->session->setFlash('error', 'Data gagal di tambahkan');
                }
            } else {
                $model->loadDefaultValues();
            }
        }

        return $this->render('lapor', [
            'model' => $model,
        ]);
    }
}
