<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'admin_id',
            'admin_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
