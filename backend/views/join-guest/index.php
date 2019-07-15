<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JoinGuestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Join Guests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-guest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Join Guest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'guest_id',
            'activity_date',
            'activity_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
