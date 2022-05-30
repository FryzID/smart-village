<?php

namespace backend\controllers\admin;

use Yii;
use backend\models\User;
use backend\models\UserSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\web\MethodNotAllowedHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
        }elseif (Yii::$app->user->identity->roles_id != 1) {
            throw new MethodNotAllowedHttpException('Hanya Admin yang boleh mengakses ini');
        } else {
            return true;
        }
    }

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $data = User::find()->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'data' => $data
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param string
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->password = Yii::$app->security->generatePasswordHash($model->password);
                $model->auth_key = Yii::$app->security->generateRandomString();

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'photo');

                if($model->validate()) {
                    
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@frontend/web/gambar/profile/') . $nama . '.' . $foto->extension);
                        $model->photo = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                }

                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image = $model->photo;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {

                $data = $this->findModel($id);

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'photo');

                if (is_null($foto)){ 
                    $model->photo = $old_image;
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                    if (!empty($foto)) {
                        if (file_exists($old_image)){
                            unlink(Yii::getAlias('@frontend/web/gambar/') . 'profile/' . $data->photo);
                        }
                    
                        $foto->saveAs(Yii::getAlias('@frontend/web/gambar/') . 'profile/' . $nama . '.' . $foto->extension);
                        $model->photo = $nama . '.' . $foto->extension;
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
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = $this->findModel($id);
        unlink(Yii::getAlias('@frontend/web/gambar/') . 'profile/' . $data->photo);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
