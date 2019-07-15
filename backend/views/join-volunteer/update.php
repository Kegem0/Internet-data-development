<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinVolunteer */

$this->title = 'Update Join Volunteer: ' . $model->volunteer_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->volunteer_id, 'url' => ['view', 'volunteer_id' => $model->volunteer_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-volunteer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
