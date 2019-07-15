<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenByorgani */

$this->title = 'Create Undertaken Byorgani';
$this->params['breadcrumbs'][] = ['label' => 'Undertaken Byorganis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undertaken-byorgani-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
