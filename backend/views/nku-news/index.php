<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku News', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Failed_pass', ['failed'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_date',
            'news_num',
            'news_headline',
            'news_ifpassed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
