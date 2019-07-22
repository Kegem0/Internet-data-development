
<?php
//1711447
namespace backend\controllers;

use yii\web\Controller;

class TimeController extends Controller
{
    public function actionGettime()
    {
        return $this->renderPartial('gettime');
    }
}
