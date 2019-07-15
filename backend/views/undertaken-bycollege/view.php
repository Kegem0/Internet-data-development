<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenBycollege */

$this->title = $model->college_name;
$this->params['breadcrumbs'][] = ['label' => 'Undertaken Bycolleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="undertaken-bycollege-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'college_name' => $model->college_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'college_name' => $model->college_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'college_name',
            'activity_date',
            'activity_num',
        ],
    ]) ?>

</div>
