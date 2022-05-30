<?php 

namespace common\modules\API\controllers;

use Yii;
use common\models\User;
use common\models\LoginForm;
use frontend\models\SignupForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class AuthController extends Controller 
{

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
        	if (Yii::$app->user->isGuest) {
        		return json_encode([
        			'status' => false,
        			'message' => 'User Is Guest',
        		]);
        	} else {
	            return json_encode([
	                'status' => true,
                    'id' => Yii::$app->user->identity->id,
                    'username' => Yii::$app->user->identity->username,
                    'access_token' => Yii::$app->user->identity->auth_key,
                    'email' => Yii::$app->user->identity->email,
	            ]);
        	}
        }
        else {
            $model->password = '';
            return $this->render('login', ['model' => $model]);
        }
    }

    public function getSignUpError($model) 
    {
        if(array_key_exists('username', $model->getErrors())) {
            return $model->getErrors()['username'][0];
        } 
        else if (array_key_exists('email', $model->getErrors())) {
            return $model->getErrors()['email'][0];
        }
        else if (array_key_exists('password', $model->getErrors())) {
            return $model->getErrors()['password'][0];
        }
        else {
            return 'Mungkin Beberapa Error Terjadi';
        }
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return json_encode([
                'status' => true,
            ]);
        }
        if ($model->hasErrors()) {
            return json_encode(
                [
                    'status' => 'false',
                    'message' => $this->getSignUpError($model)
                ]
            );
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionGetUser()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if(Yii::$app->user->isGuest) {
            return [
                'username' => 'Failed to get username',
                'email' => 'Failed to get email',
            ];
        } else {
            return [
                'username' => Yii::$app->user->identity->username,
                'email' => Yii::$app->user->identity->email,
                'session' => Yii::$app->session
            ];
        }
    }
}

?>