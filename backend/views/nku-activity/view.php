<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuActivity */

$this->title = $model->activity_date;
$this->params['breadcrumbs'][] = ['label' => 'Nku Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nku-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], [
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
            'activity_date',
            'activity_num',
            'activity_name',
            'activity_type',
            'activity_position',
        ],
    ]) ?>

</div>
