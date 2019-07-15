<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuStudent */

$this->title = 'Create Nku Student';
$this->params['breadcrumbs'][] = ['label' => 'Nku Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
