<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuCollege */

$this->title = 'Update Nku College: ' . $model->college_name;
$this->params['breadcrumbs'][] = ['label' => 'Nku Colleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->college_name, 'url' => ['view', 'id' => $model->college_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-college-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
