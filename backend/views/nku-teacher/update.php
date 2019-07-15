<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuTeacher */

$this->title = 'Update Nku Teacher: ' . $model->teacher_workid;
$this->params['breadcrumbs'][] = ['label' => 'Nku Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_workid, 'url' => ['view', 'id' => $model->teacher_workid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
