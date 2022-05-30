<?php

namespace backend\controllers\operator;

use backend\models\surat\SuratKematian;
use backend\models\surat\SuratKematianSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
use yii\web\MethodNotAllowedHttpException;
use yii\web\UploadedFile;

/**
 * SuratKematianController implements the CRUD actions for SuratKematian model.
 */
class SuratKematianController extends Controller
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
     * Lists all SuratKematian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratKematianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratKematian model.
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
     * Creates a new SuratKematian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratKematian();
        $user = Yii::$app->user->id;
        
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'lampiran_kk');

                $model->created_by = $user;
                
                if($model->validate()) {
                    
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@backend/web/gambar/surat-kematian/kk/') . $nama . '.' . $foto->extension);
                        $model->lampiran_kk = $nama . '.' . $foto->extension;
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
     * Updates an existing SuratKematian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image = $model->lampiran_kk;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {

                $data = $this->findModel($id);

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'lampiran_kk');

                if (is_null($foto)){
                    $model->lampiran_kk = $old_image;
                    $model->save(false);
                    // var_dump($model->kades_id);die;
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                    if (!empty($foto)) {
                        if (file_exists($old_image)){
                            unlink(Yii::getAlias('@backend/web/gambar/surat-kematian/') . 'kk/' . $data->lampiran_kk);
                        }
                    
                        $foto->saveAs(Yii::getAlias('@backend/web/gambar/surat-kematian/') . 'kk/' . $nama . '.' . $foto->extension);
                        $model->lampiran_kk = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                    // var_dump($model->kades_id);die;
                    
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
                
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratKematian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = $this->findModel($id);
        unlink(Yii::getAlias('@backend/web/gambar/surat-kelahiran/') . 'kk/' . $data->lampiran_kk);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratKematian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return SuratKematian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SuratKematian::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPrint($id)
    {
        $modelKematian = \backend\models\surat\SuratKematian::find()->where(['id' => $id])->all();
        $dataKematian = \backend\models\surat\SuratKematian::findOne(['id' => $id]);

        $content = $this->renderPartial('print\print-kematian', [
            'dataKematian' => $dataKematian,
            'modelKematian' => $modelKematian,
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
                'setTitle' => ['Print Surat Kematian '. $dataKematian->id],
                // 'setHeader' => ['Kop Surat']
            ]
        ]);
        
        return $pdf->render();   
    }
}
