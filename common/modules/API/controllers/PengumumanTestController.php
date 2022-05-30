<?php

namespace common\modules\API\controllers;

use common\models\Pengumuman;
use yii\rest\ActiveController;

/**
 * Class PostController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package frontend\controllers
 */
class PengumumanTestController extends ActiveController
{
    public $modelClass = Pengumuman::class;

}