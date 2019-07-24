<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Student', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('pass', ['nonadmin'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_id',
            'student_name',
            'college_name',

            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>


</div>
