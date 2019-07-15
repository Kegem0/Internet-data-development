<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuElement */

$this->title = 'Create Nku Element';
$this->params['breadcrumbs'][] = ['label' => 'Nku Elements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-element-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
