<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuNews */

$this->title = 'Update Nku News: ' . $model->news_date;
$this->params['breadcrumbs'][] = ['label' => 'Nku News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_date, 'url' => ['view', 'news_date' => $model->news_date, 'news_num' => $model->news_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('con_form', [
        'model' => $model,
    ]) ?>

</div>
