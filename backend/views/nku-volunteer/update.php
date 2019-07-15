<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuVolunteer */

$this->title = 'Update Nku Volunteer: ' . $model->volunteer_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->volunteer_id, 'url' => ['view', 'id' => $model->volunteer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-volunteer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
