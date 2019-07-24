<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Failed-Pass';
$this->params['breadcrumbs'][] = 'news';
$this->params['breadcrumbs'][] = ['label' => 'Failed-pass', 'url' => ['failed']];
?>
<div class="nku-news-index">
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
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'pass',
                'template' => '{audit}',
                'buttons' => [
                    'audit' => function($url,$model){
                        return '<a class="btn btn-default btn-xs btn-warning" href="'.$url.'" role="button">pass</a>';
                    },
                ],
                'headerOptions' => ['width' => '80'],
            ],
        ],
    ]); ?>

</div>
