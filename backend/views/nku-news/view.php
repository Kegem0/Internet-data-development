<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuNews */

$this->title = $model->news_date;
$this->params['breadcrumbs'][] = ['label' => 'Nku News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nku-news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'news_date' => $model->news_date, 'news_num' => $model->news_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'news_date' => $model->news_date, 'news_num' => $model->news_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'news_date',
            'news_num',
            'news_headline',
            'news_ifpassed',
        ],
    ]) ?>

</div>
