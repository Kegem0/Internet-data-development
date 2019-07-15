<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuLeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Leaders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-leader-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Leader', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'leader_id',
            'leader_position',
            'leader_unit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
