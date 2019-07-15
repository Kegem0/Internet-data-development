<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UndertakenBycollegeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Undertaken Bycolleges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undertaken-bycollege-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Undertaken Bycollege', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'college_name',
            'activity_date',
            'activity_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
