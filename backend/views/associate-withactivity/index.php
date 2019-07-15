<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AssociateWithactivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Associate Withactivities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associate-withactivity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Associate Withactivity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'activity_date',
            'activity_num',
            'news_date',
            'news_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
