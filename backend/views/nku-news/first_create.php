<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuNews */

$this->title = 'Create Nku News';
$this->params['breadcrumbs'][] = ['label' => 'Nku News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('initial_form', [
        'model' => $model,
    ]) ?>

</div>
