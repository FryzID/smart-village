<?php

namespace common\modules\API\controllers;

use Yii;
use common\models\LaporAduan;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LaporAduanController implements the CRUD actions for LaporAduan model.
 */
class LaporAduanController extends Controller
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
     * Lists all LaporAduan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => LaporAduan::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LaporAduan model.
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

    public function getCreateError($model) {
        if(array_key_exists('foto', $model->getErrors())) {
            return $model->getErrors()['foto'][0];
        }
        else if (array_key_exists('deskripsi', $model->getErrors())) {
            return $model->getErrors()['deskripsi'][0];
        }
        else if (array_key_exists('user_id', $model->getErrors())) {
            return $model->getErrors()['user_id'][0];
        }
        else if (array_key_exists('pembangunan_id', $model->getErrors())) {
            return $model->getErrors()['pembangunan_id'][0];
        }
        else if (array_key_exists('status', $model->getErrors())) {
            return $model->getErrors()['status'][0];
        }
        else {
            return 'Some Error Happen While Submit New Data';
        }
    }

    /**
     * Creates a new LaporAduan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LaporAduan();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('LaporAduan');
            $model->deskripsi = $request['deskripsi'];
            $model->pembangunan_id = $request['pembangunan_id'];
            // try {
                // $model->user_id = Yii::$app->user->id;
            // } catch (exception $e) {
                $model->user_id = 1;
            // }
            $model->status = 'laporanbaru';
            $model->save();
            if ($model->hasErrors()) {
                return json_encode([
                    'status' => false,
                    'message' => $this->getCreateError($model),
                    ]);
            } else {
                return json_encode([
                    'status' => true,
                    'message' => 'Success Send Data',
                ]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LaporAduan model.
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
     * Deletes an existing LaporAduan model.
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
     * Finds the LaporAduan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LaporAduan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LaporAduan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
