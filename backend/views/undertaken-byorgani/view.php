<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenByorgani */

$this->title = $model->organi_name;
$this->params['breadcrumbs'][] = ['label' => 'Undertaken Byorganis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="undertaken-byorgani-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'organi_name' => $model->organi_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'organi_name' => $model->organi_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], [
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
            'organi_name',
            'activity_date',
            'activity_num',
        ],
    ]) ?>

</div>
