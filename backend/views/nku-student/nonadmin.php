<?php

use yii\data\ActiveDataProvider;

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use backend\models\NkuAdmin;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ADmin Pass';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-student-index">

    <h1><?= Html::encode($this->title) ?></h1>



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
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'pass',
                'template' => '{audit} ',
                'buttons' => [
                    'audit' => function($url,$model){
                    if(true) {
                        return '<a class="btn btn-default btn-xs btn-warning" href="' . $url . '" role="button">pass</a>';
                    }
                        },
//                    'forbidden' => function($url,$model){
//                    if(true)
//                        return '<a class="btn btn-default btn-xs btn-warning"    role="button">admin-already</a>';
//                    },
                ],
                'headerOptions' => ['width' => '80'],
            ],
        ],
    ]); ?>


</div>
