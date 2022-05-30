<?php

namespace common\modules\API\controllers;

use Yii;
use common\models\RequestPembangunan;
use Error;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RequestPembangunanController implements the CRUD actions for RequestPembangunan model.
 */
class RequestPembangunanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all RequestPembangunan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => RequestPembangunan::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RequestPembangunan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function getCreateError($model) 
    {
        if(array_key_exists('judul', $model->getErrors())) {
            return $model->getErrors()['judul'][0];
        }
        else if (array_key_exists('deskripsi', $model->getErrors())) {
            return $model->getErrors()['deskripsi'][0];
        }
        else if (array_key_exists('kategori_pembangunan_id', $model->getErrors())) {
            return $model->getErrors()['kategori_pembangunan_id'][0];
        }
        else if (array_key_exists('user_id', $model->getErrors())) {
            return $model->getErrors()['user_id'][0];
        } 
        else if (array_key_exists('status', $model->getErrors())) {
            return $model->getErrors()['status'][0];
        }
        else {
            return 'Some error happen';
        }
    }

    /**
     * Creates a new RequestPembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RequestPembangunan();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('RequestPembangunan');
            $model->judul = $request['judul'];
            $model->deskripsi = $request['deskripsi'];
            $model->kategori_pembangunan_id = $request['kategori_pembangunan_id'];
            // try {
                // $model->user_id = Yii::$app->user->id;
            // } catch (exception $e) {
                $model->user_id = 1;
            // }
            $model->status = 'requestbaru';
            $model->save();
            if ($model->hasErrors()) {
                return json_encode([
                    'status' => false,
                    'message' => $this->getCreateError($model),
                ]);
            } else {
                return json_encode(
                    [
                        'status' => true, 
                        'message' => 'Success Sending Data',
                    ]
                );
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RequestPembangunan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RequestPembangunan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RequestPembangunan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RequestPembangunan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RequestPembangunan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
