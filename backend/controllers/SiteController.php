<?php

namespace backend\controllers;

use common\models\Pembangunan;
use common\models\Penduduk;
use common\models\User;
use common\models\Dusun;
use common\models\RtRw;
use common\models\LoginForm;
use frontend\models\LaporAduan;
use frontend\models\RequestPembangunan;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'logout'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $lapor = LaporAduan::find()->count();
        $request = RequestPembangunan::find()->count();
        $pembangunan = Pembangunan::find()->count();
        $penduduk = Penduduk::find()->count();
        $dusun = Dusun::find()->count();
        $totalRtRw = RtRw::find()->count();
        $totalUser = User::find()->count();

        $totalPembangunan = Pembangunan::find()
        ->all();

        return $this->render('index', [
            'lapor' => $lapor,
            'pembangunan' => $pembangunan,
            'request' => $request,
            'penduduk' => $penduduk,
            'dusun' => $dusun,
            'totalRtRw' => $totalRtRw,
            'totalUser' => $totalUser,
            'totalPembangunan' => $totalPembangunan
        ]);
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {            

            if (Yii::$app->checkRole->checkOperator()) {
                return $this->goHome();
            } elseif (Yii::$app->checkRole->checkAdmin()) {
                return $this->goBack();
            }

        }    

        $model->password = '';
        

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
