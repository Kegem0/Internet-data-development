<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditByadmin */

$this->title = $model->admin_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Byadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-byadmin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'admin_id' => $model->admin_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'admin_id' => $model->admin_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num], [
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
            'admin_id',
            'news_date',
            'news_num',
        ],
    ]) ?>

</div>
