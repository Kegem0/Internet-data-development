<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AssociateWithactivity */

$this->title = 'Update Associate Withactivity: ' . $model->activity_date;
$this->params['breadcrumbs'][] = ['label' => 'Associate Withactivities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_date, 'url' => ['view', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num, 'news_date' => $model->news_date, 'news_num' => $model->news_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="associate-withactivity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
