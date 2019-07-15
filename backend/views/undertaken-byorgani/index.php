<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UndertakenByorganiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Undertaken Byorganis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undertaken-byorgani-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Undertaken Byorgani', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'organi_name',
            'activity_date',
            'activity_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
