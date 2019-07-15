<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuActivity */

$this->title = 'Update Nku Activity: ' . $model->activity_date;
$this->params['breadcrumbs'][] = ['label' => 'Nku Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_date, 'url' => ['view', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
