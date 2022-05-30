<?php

namespace backend\controllers\operator;

use Yii;
use backend\models\Pembangunan;
use backend\models\PembangunanSearch;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\MethodNotAllowedHttpException;

/**
 * PembangunanController implements the CRUD actions for Pembangunan model.
 */
class PembangunanController extends Controller
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

    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
        }elseif (Yii::$app->user->identity->roles_id != 1 && Yii::$app->user->identity->roles_id != 7) {
            throw new MethodNotAllowedHttpException('Hanya Admin dan Operator yang boleh mengakses ini');
        } else {
            return true;
        }
       
    }

    /**
     * Lists all Pembangunan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PembangunanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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

    /**
     * Creates a new Pembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pembangunan();
        $user = Yii::$app->user->id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'foto');
                
                $model->users_id = $user; 

                if($model->validate()) {
                    
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@backend/web/gambar/pembangunan/') . $nama . '.' . $foto->extension);
                        $model->foto = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pembangunan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image = $model->foto;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {

                $data = $this->findModel($id);

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'foto');

                if (is_null($foto)){
                    $model->foto = $old_image;
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
                }else if ($model->validate()) {
                    if (!empty($foto)) {
                        if (file_exists($old_image)){
                            unlink(Yii::getAlias('@backend/web/gambar/') . 'pembangunan/' . $data->foto);
                        }
                    
                        $foto->saveAs(Yii::getAlias('@backend/web/gambar/') . 'pembangunan/' . $nama . '.' . $foto->extension);
                        $model->foto = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                    
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pembangunan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = $this->findModel($id);
        unlink(Yii::getAlias('@backend/web/gambar/') . 'pembangunan/' . $data->foto);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pembangunan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Pembangunan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pembangunan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
