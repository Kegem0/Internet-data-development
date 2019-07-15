<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuTeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacher_workid',
            'teacher_name',
            'teacher_position',
            'teacher_college',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
