<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuStudent */

$this->title = 'Update Nku Student: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
