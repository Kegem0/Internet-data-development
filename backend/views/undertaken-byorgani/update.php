<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenByorgani */

$this->title = 'Update Undertaken Byorgani: ' . $model->organi_name;
$this->params['breadcrumbs'][] = ['label' => 'Undertaken Byorganis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->organi_name, 'url' => ['view', 'organi_name' => $model->organi_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="undertaken-byorgani-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
