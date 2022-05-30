<?php

namespace backend\controllers\operator;

use backend\models\surat\SuratDomisiliUsaha;
use backend\models\surat\SuratDomisiliUsahaSearch;
use kartik\mpdf\Pdf;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\MethodNotAllowedHttpException;
use yii\web\UploadedFile; 

/**
 * SuratDomisiliUsahaController implements the CRUD actions for SuratDomisiliUsaha model.
 */
class SuratDomisiliUsahaController extends Controller
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
     * Lists all SuratDomisiliUsaha models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratDomisiliUsahaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratDomisiliUsaha model.
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
     * Creates a new SuratDomisiliUsaha model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratDomisiliUsaha();
        $user = Yii::$app->user->id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'lampiran_ktp');

                $model->created_by = $user;
                
                if($model->validate()) {
                    
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@backend/web/gambar/surat-domisili-usaha/ktp/') . $nama . '.' . $foto->extension);
                        $model->lampiran_ktp = $nama . '.' . $foto->extension;
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
     * Updates an existing SuratDomisiliUsaha model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $user = Yii::$app->user->id;
        $old_image = $model->lampiran_ktp;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $model->updated_by = $user;

                $data = $this->findModel($id);

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'lampiran_ktp');

                if (is_null($foto)){
                    $model->lampiran_ktp = $old_image;
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                    if (!empty($foto)) {
                        if (file_exists($old_image)){
                            unlink(Yii::getAlias('@backend/web/gambar/surat-domisili-usaha/') . 'ktp/' . $data->lampiran_ktp);
                        }
                    
                        $foto->saveAs(Yii::getAlias('@backend/web/gambar/surat-domisili-orang/') . 'ktp/' . $nama . '.' . $foto->extension);
                        $model->lampiran_ktp = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                    
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
                
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratDomisiliUsaha model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = $this->findModel($id);
        unlink(Yii::getAlias('@backend/web/gambar/surat-domisili-usaha/') . 'ktp/' . $data->lampiran_ktp);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratDomisiliUsaha model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return SuratDomisiliUsaha the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SuratDomisiliUsaha::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPrint($id)
    {
        $modelDomisili = \backend\models\surat\SuratDomisiliUsaha::find()->where(['id' => $id])->all();
        $dataDomisili = \backend\models\surat\SuratDomisiliUsaha::findOne(['id' => $id]);

        $content = $this->renderPartial('print\print-keterangan-domisili-usaha', [
            'dataDomisili' => $dataDomisili,
            'modelDomisili' => $modelDomisili,
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
                'setTitle' => ['Print Surat Kelahiran '. $dataDomisili->id],
                // 'setHeader' => ['Kop Surat']
            ]
        ]);
        
        return $pdf->render();   
    }
}
