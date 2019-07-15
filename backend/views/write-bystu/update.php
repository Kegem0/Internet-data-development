<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WriteBystu */

$this->title = 'Update Write Bystu: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Write Bystus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'student_id' => $model->student_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="write-bystu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
