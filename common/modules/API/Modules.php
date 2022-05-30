<?php

namespace common\modules\API;
use Yii;

/**
 * API module definition class
 */
class Modules extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'common\modules\API\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        Yii::$app->request->enableCsrfValidation = false;
        Yii::$app->user->enableSession = true;
        // custom initialization code goes here
    }
}
