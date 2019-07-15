<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinTeacher */

$this->title = 'Update Join Teacher: ' . $model->teacher_workid;
$this->params['breadcrumbs'][] = ['label' => 'Join Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_workid, 'url' => ['view', 'teacher_workid' => $model->teacher_workid, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
