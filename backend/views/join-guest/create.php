<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinGuest */

$this->title = 'Create Join Guest';
$this->params['breadcrumbs'][] = ['label' => 'Join Guests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-guest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
