<?php

namespace backend\controllers;

use backend\models\Pembangunan;
use backend\models\Penduduk;
use backend\models\User;
use backend\models\Dusun;
use backend\models\RtRw;
use backend\models\Roles;
use common\models\LoginForm;
use backend\models\LaporAduan;
use backend\models\RequestPembangunan;
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
        $totalRole = Roles::find()->count();

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
            'totalPembangunan' => $totalPembangunan,
            'totalRole' => $totalRole
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

        return $this->redirect('login');
    }
}
