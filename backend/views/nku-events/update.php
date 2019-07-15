<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuEvents */

$this->title = 'Update Nku Events: ' . $model->events_time;
$this->params['breadcrumbs'][] = ['label' => 'Nku Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->events_time, 'url' => ['view', 'events_time' => $model->events_time, 'events_name' => $model->events_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-events-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
