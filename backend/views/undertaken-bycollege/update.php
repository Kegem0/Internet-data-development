<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenBycollege */

$this->title = 'Update Undertaken Bycollege: ' . $model->college_name;
$this->params['breadcrumbs'][] = ['label' => 'Undertaken Bycolleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->college_name, 'url' => ['view', 'college_name' => $model->college_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="undertaken-bycollege-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
