<?php 

namespace backend\components;

use Yii;
use yii\base\Component;

class CheckRoleComponents extends Component 
{
    const CHECK_ADMIN = 'checkAdmin';
    const CHECK_OPERATOR = 'checkOperator';

    public static function checkAdmin()
    {
        if (Yii::$app->user->identity->roles_id != 1) {
            throw new \yii\web\ForbiddenHttpException("Hanya Admin Yang di Perbolehkan Masuk");
        } else {
            return true;
        }
    }

    public static function checkOperator()
    {
        if (Yii::$app->user->identity->roles_id == 1 || Yii::$app->user->identity->roles_id == 7) {
            return true;
        } else {
            throw new \yii\web\ForbiddenHttpException("Hanya Admin atau Operator Yang di Perbolehkan Masuk");
        }
    }

}

