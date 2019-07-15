<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuOrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'organi_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
