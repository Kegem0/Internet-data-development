<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuAlumni */

$this->title = 'Update Nku Alumni: ' . $model->alumi_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alumi_id, 'url' => ['view', 'id' => $model->alumi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-alumni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
