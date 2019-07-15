<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuLeader */

$this->title = 'Update Nku Leader: ' . $model->leader_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku Leaders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->leader_id, 'url' => ['view', 'id' => $model->leader_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-leader-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
