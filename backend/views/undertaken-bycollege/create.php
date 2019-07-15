<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenBycollege */

$this->title = 'Create Undertaken Bycollege';
$this->params['breadcrumbs'][] = ['label' => 'Undertaken Bycolleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undertaken-bycollege-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
