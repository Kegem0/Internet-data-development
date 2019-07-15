<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuCollegeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Colleges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-college-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku College', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'college_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
