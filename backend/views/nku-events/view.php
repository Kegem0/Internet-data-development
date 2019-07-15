<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuEvents */

$this->title = $model->events_time;
$this->params['breadcrumbs'][] = ['label' => 'Nku Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nku-events-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'events_time' => $model->events_time, 'events_name' => $model->events_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'events_time' => $model->events_time, 'events_name' => $model->events_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'events_time',
            'events_name',
        ],
    ]) ?>

</div>
