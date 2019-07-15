<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuGuest */

$this->title = 'Update Nku Guest: ' . $model->guest_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku Guests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guest_id, 'url' => ['view', 'id' => $model->guest_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-guest-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
