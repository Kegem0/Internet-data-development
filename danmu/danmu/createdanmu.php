<?php
use frontend\models\Danmus;
$danmu = new Danmus();
$danmu->words = Yii::$app->request->post('content');
$danmu->save();
?>