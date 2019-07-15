<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JoinVolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Join Volunteers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-volunteer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Join Volunteer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'volunteer_id',
            'activity_date',
            'activity_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
