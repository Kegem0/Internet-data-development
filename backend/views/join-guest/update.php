<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinGuest */

$this->title = 'Update Join Guest: ' . $model->guest_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Guests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guest_id, 'url' => ['view', 'guest_id' => $model->guest_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-guest-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
