<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuditByadminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Audit Byadmins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-byadmin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Byadmin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'admin_id',
            'news_date',
            'news_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
