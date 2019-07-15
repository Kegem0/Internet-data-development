<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinVolunteer */

$this->title = $model->volunteer_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="join-volunteer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'volunteer_id' => $model->volunteer_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'volunteer_id' => $model->volunteer_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], [
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
            'volunteer_id',
            'activity_date',
            'activity_num',
        ],
    ]) ?>

</div>
