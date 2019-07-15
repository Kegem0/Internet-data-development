<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuOrganization */

$this->title = 'Update Nku Organization: ' . $model->organi_name;
$this->params['breadcrumbs'][] = ['label' => 'Nku Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->organi_name, 'url' => ['view', 'id' => $model->organi_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku-organization-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
