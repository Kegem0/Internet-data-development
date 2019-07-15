<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuElementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Elements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-element-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Element', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'element_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
