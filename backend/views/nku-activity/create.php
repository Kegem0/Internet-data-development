<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuActivity */

$this->title = 'Create Nku Activity';
$this->params['breadcrumbs'][] = ['label' => 'Nku Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
