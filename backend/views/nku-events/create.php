<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuEvents */

$this->title = 'Create Nku Events';
$this->params['breadcrumbs'][] = ['label' => 'Nku Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-events-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
