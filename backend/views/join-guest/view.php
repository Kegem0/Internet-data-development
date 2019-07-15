<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinGuest */

$this->title = $model->guest_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Guests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="join-guest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'guest_id' => $model->guest_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'guest_id' => $model->guest_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], [
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
            'guest_id',
            'activity_date',
            'activity_num',
        ],
    ]) ?>

</div>
